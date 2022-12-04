<?php
declare(strict_types=1);

namespace VkApi\Message;

use VkApi\Keyboard\Keyboard;
use VkApi\Message\Template\Template;

class Message
{
    /**
     * user_id Идентификатор пользователя, которому отправляется сообщение.
     */
    public readonly ?int $userId;
    /**
     * random_id
     * Число в пределах int32 — уникальный (в привязке к API_ID и ID отправителя) идентификатор,
     * предназначенный для предотвращения повторной отправки одинакового сообщения.
     * Сохраняется вместе с сообщением и доступен в истории сообщений.
     * Переданный в запросе random_id используется для проверки уникальности,
     * проверяя в заданном диалоге сообщения за последний час (но не более 100 последних сообщений).
     */
    public readonly ?int $randomId;
    /**
     * peer_id
     * Идентификатор назначения.
     * Для пользователя:
     * • id пользователя.
     * Для групповой беседы:
     * • 2000000000 + id беседы.
     * Для сообщества:
     * • -id сообщества.
     */
    public readonly ?int $peerId;
    /**
     * peer_ids
     * Идентификаторы получателей сообщения (при необходимости отправить сообщение сразу нескольким пользователям).
     * Доступно только для ключа доступа сообщества. Максимальное количество идентификаторов: 100.
     */
    public readonly ?array $peerIds;
    /**
     * domain
     * Короткий адрес пользователя (например, illarionov).
     */
    public readonly ?string $domain;
    /**
     * chat_id
     * Идентификатор беседы, к которой будет относиться сообщение.
     */
    public readonly ?int $chatId;
    /**
     * user_ids
     * Идентификаторы получателей сообщения (при необходимости отправить сообщение сразу нескольким пользователям).
     * Доступно только для ключа доступа сообщества. Максимальное количество идентификаторов: 100.
     */
    public readonly ?array $userIds;
    /**
     * message
     * Текст личного сообщения. Обязательный параметр, если не задан параметр attachment.
     */
    public readonly ?string $message;
    /**
     * guid
     * Уникальный идентификатор, предназначенный для предотвращения повторной отправки одинакового сообщения.
     */
    public readonly ?int $guid;
    /**
     * lat
     * Географическая широта (от -90 до 90).
     */
    public readonly ?float $lat;
    /**
     * long
     * Географическая долгота (от -180 до 180).
     */
    public readonly ?float $long;
    /**
     * attachment
     * Медиавложения к личному сообщению, перечисленные через запятую. Каждое прикрепление представлено в формате:
     * <type><owner_id>_<media_id>
     * <type> — тип медиавложения:
     * •photo — фотография;
     * •video — видеозапись;
     * •audio — аудиозапись;
     * •doc — документ;
     * •wall — запись на стене;
     * •market — товар;
     * •poll — опрос.
     * <owner_id> — идентификатор владельца медиавложения
     * (обратите внимание, если объект находится в сообществе, этот параметр должен быть отрицательным).
     * <media_id> — идентификатор медиавложения.
     * Например:
     * photo100172_166443618
     * Параметр является обязательным, если не задан параметр message.
     * В случае, если прикрепляется объект,
     * принадлежащий другому пользователю следует добавлять к вложению его access_key в формате
     * <type><owner_id>_<media_id>_<access_key>,
     * Например: video85635407_165186811_69dff3de4372ae9b6e
     */
    public readonly ?Attachment $attachment;
    /**
     * reply_to
     * Идентификатор сообщения, на которое требуется ответить.
     */
    public readonly ?int $replyTo;
    /**
     * forward_messages
     * Идентификаторы пересылаемых сообщений, перечисленные через запятую.
     * Перечисленные сообщения отправителя будут отображаться в теле письма у получателя.
     * Не более 100 значений на верхнем уровне,
     * максимальный уровень вложенности — 45,
     * максимальное количество пересылаемых сообщений — 500.
     */
    public readonly ?array $forwardMessages;
    /**
     * forward
     * JSON-объект со следующими полями:
     * •owner_id — владелец сообщений. Стоит передавать, если вы хотите переслать сообщения из сообщества в диалог;
     * •peer_id — идентификатор места, из которого необходимо переслать сообщения;
     * •conversation_message_ids — массив conversation_message_id сообщений, которые необходимо переслать. В массив conversation_message_ids можно передать сообщения:
     * •находящиеся в личном диалоге с ботом;
     * •являющиеся исходящими сообщениями бота;
     * •написанными после того, как бот вступил в беседу и появился доступ к сообщениям.
     * •message_ids — массив id сообщений;
     * •is_reply — ответ на сообщения.
     * Стоит передавать, если вы хотите ответить на сообщения в том чате, в котором находятся сообщения.
     * При этом в conversation_message_ids или message_ids должен находиться только один элемент.
     */
    public readonly ?Forward $forward;
    /**
     * sticker_id
     * Идентификатор стикера.
     */
    public readonly ?int $stickerId;
    /**
     * group_id
     * Идентификатор сообщества (для сообщений сообщества с ключом доступа пользователя).
     */
    public readonly ?int $groupId;
    /**
     * keyboard
     * Объект, описывающий клавиатуру бота.
     */
    public readonly ?Keyboard $keyboard;
    /**
     * template
     * Объект, описывающий клавиатуру бота.
     */
    public readonly ?Template $template;
    /**
     * payload
     */
    public readonly ?int $payload;
    /**
     * content_source
     */
    public readonly ?object $contentSource;
    /**
     * dont_parse_links
     */
    public readonly ?int $dontParseLinks;
    /**
     * disable_mentions
     */
    public readonly ?int $disableMentions;
    /**
     * intent
     */
    public readonly ?string $intent;
    /**
     * subscribe_id
     */
    public readonly ?int $subscribeId;

    public function toArray(): array
    {
        return [
            'user_id' => $this->userId,
            'random_id' => $this->randomId,
            'peer_id' => $this->peerId,
            'peer_ids' => $this->peerIds,
            'domain' => $this->domain,
            'chat_id' => $this->chatId,
            'message' => $this->message,
            'lat' => $this->lat,
            'long' => $this->long,
            'attachment' => $this->attachment,
            'reply_to' => $this->replyTo,
            'forward_messages' => $this->forwardMessages,
            'forward' => $this->forward,
            'sticker_id' => $this->stickerId,
            'group_id' => $this->groupId,
            'keyboard' => $this->keyboard->toArray(),
            'template' => $this->template->toArray(),
            'payload' => $this->payload,
            'content_source' => $this->contentSource->toArray(),
            'dont_parse_links' => $this->dontParseLinks,
            'disable_mentions' => $this->disableMentions,
            'intent' => $this->intent,
            'subscribe_id' => $this->subscribeId,
        ];
    }
}
