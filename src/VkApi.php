<?php
declare(strict_types=1);

namespace VkApi;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;
use Throwable;
use VkApi\Message\Message;

class VkApi
{
    const MESSAGES_SEND = 'messages.send';

    public function __construct(
        public readonly string $confirmationToken,
        public readonly string $accessToken,
        public readonly string $version,
        private readonly LoggerInterface $logger,
        private readonly ClientInterface $client
    ) {}

    /**
     * @throws Throwable
     */
    public function send(string $method, array $params): ResponseInterface
    {
        $params['access_token'] = $this->accessToken;
        $params['v'] = $this->version;

        try {
            $response = $this->client->get('https://api.vk.com/method/' . $method, $params);
        } catch (Throwable $e) {
            $this->logger->error(
                $e->getMessage(),
                [
                    'trace' => $e->getTrace(),
                ]
            );
            throw $e;
        }

        return $response;
    }

    /**
     * @param Message $message
     * @return ResponseInterface
     * @throws Throwable
     */
    public function messagesSend(Message $message): ResponseInterface
    {
        return $this->send(self::MESSAGES_SEND, $message->toArray());
    }

//    function vkApi_messagesSend($data = array())
//    {
//        return _vkApi_call('messages.send', $data);
//    }
//
//    function _callback_okResponse()
//    {
//        _callback_response('ok');
//    }
//
//    function _callback_response($data)
//    {
//        echo $data;
//        exit();
//    }
//
//    function _callback_getEvent()
//    {
//        return json_decode(file_get_contents('php://input'), true);
//    }
//
//    function _mysql_connect_db(&$db)
//    {
//        $db = new MysqliDb (HOST, USERNAME, PASSWORD, DATABASE_NAME);
//        $db->autoReconnect = false;
//    }
//
//    function _mysql_getUserByIdVK(&$user, $user_id)
//    {
//        _mysql_connect_db($db);
//        $db->where("user_id", $user_id);
//        $user = $db->getOne("users");
//        $db->disconnect();
//    }
//
//    function _mysql_updateLastKeyboard($user_id, $last_keyboard)
//    {
//        _mysql_connect_db($db);
//        $data = array('last_keyboard' => $last_keyboard);
//        $db->where('user_id', $user_id);
//        $db->update('users', $data);
//        $db->disconnect();
//    }
//
//    function _mysql_updateOptions($user_id, $keyboard, $value)
//    {
//        _mysql_connect_db($db);
//        $data = array($keyboard => $value);
//        $db->where('user_id', $user_id);
//        $db->update('users', $data);
//        $db->disconnect();
//    }
//
//    function initVars($event, &$id, &$message, &$payload, &$user_id, &$type, &$attachments)
//    {
//        $data = $event;
//        $data_backup = $event;
//        $type = isset($data['type']) ? $data['type'] : null;
//        if (isset($data['object']['message']) and $type == 'message_new') {
//            $data['object'] = $data['object']['message']; //какая-то дичь с ссылками, но $this->data теперь тоже переопределился
//        }
//        $id = isset($data['object']['peer_id']) ? $data['object']['peer_id'] : null;
//        $message = isset($data['object']['text']) ? $data['object']['text'] : null;
//        $payload = isset($data['object']['payload']) ? json_decode($data['object']['payload'], true) : null;
//        $payload = $payload[0];
//        $attachments = isset($data['object']['attachments'][0]['photo']['sizes']) ? $data['object']['attachments'][0]['photo'] : null;
//        $user_id = isset($data['object']['from_id']) ? $data['object']['from_id'] : null;
//        $data = $data_backup;
//        return $data_backup;
//    }
//
//    function vkApi_usersGet($user_id)
//    {
//        return _vkApi_call('users.get', array(
//            'user_id' => $user_id,
//            'fields' => 'city,bdate',
//        ));
//    }
//
//    function vkApi_photosGetMessagesUploadServer($peer_id)
//    {
//        return _vkApi_call('photos.getMessagesUploadServer', array(
//            'peer_id' => $peer_id,
//        ));
//    }
//
//    /*function vkApi_getPhotoOriginalSize($peer_id) {
//      $res = _vkApi_call('photos.get', array(
//        'owner_id' => $peer_id,
//        'album_id' => 'profile',
//        'rev' => 1,
//        'count' => 1,
//      ));
//      log_msg(json_encode($res));
//    }*/
//
//    function vkApi_getAge($date)
//    {
//        $birthDate = explode(".", $date);
//        return (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
//            ? ((date("Y") - $birthDate[2]) - 1)
//            : (date("Y") - $birthDate[2]));
//    }
//
//    function vkApi_photosSaveMessagesPhoto($photo, $server, $hash)
//    {
//        return _vkApi_call('photos.saveMessagesPhoto', array(
//            'photo' => $photo,
//            'server' => $server,
//            'hash' => $hash,
//        ));
//    }
//
//    function vkApi_docsGetMessagesUploadServer($peer_id, $type)
//    {
//        return _vkApi_call('docs.getMessagesUploadServer', array(
//            'peer_id' => $peer_id,
//            'type' => $type,
//        ));
//    }
//
//    /*function vkApi_docsSave($file, $title) {
//      return _vkApi_call('docs.save', array(
//        'file'  => $file,
//        'title' => $title,
//      ));
//    }*/
//
//    function vkApi_upload($url, $file_name)
//    {
//        /*if (!file_exists($file_name)) {
//          throw new Exception('File not found: '.$file_name);
//        }*/
//
//        $curl = curl_init($url);
//        curl_setopt($curl, CURLOPT_POST, true);
//        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($curl, CURLOPT_POSTFIELDS, array('file' => new CURLfile($file_name)));
//        $json = curl_exec($curl);
//        $error = curl_error($curl);
//        if ($error) {
//            log_error($error);
//            throw new Exception("Failed {$url} request");
//        }
//
//        curl_close($curl);
//
//        $response = json_decode($json, true);
//        if (!$response) {
//            throw new Exception("Invalid response for {$url} request");
//        }
//
//        return $response;
//    }
}
