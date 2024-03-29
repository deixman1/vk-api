<?php
/**
 * MessagesConversation
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * VK api
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 5.131
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace VkApi\Model\Message;

use ArrayAccess;
use InvalidArgumentException;
use JsonSerializable;
use VkApi\Lib\ObjectSerializer;
use VkApi\Model\ModelInterface;

/**
 * MessagesConversation Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class MessagesConversation implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'messages_conversation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'peer' => 'MessagesConversationPeer',
        'sort_id' => 'MessagesConversationSortId',
        'last_message_id' => 'int',
        'last_conversation_message_id' => 'int',
        'in_read' => 'int',
        'out_read' => 'int',
        'unread_count' => 'int',
        'is_marked_unread' => 'bool',
        'out_read_by' => 'MessagesOutReadBy',
        'important' => 'bool',
        'unanswered' => 'bool',
        'special_service_type' => 'string',
        'message_request_data' => 'MessagesMessageRequestData',
        'mentions' => 'int[]',
        'current_keyboard' => 'MessagesKeyboard',
        'push_settings' => 'MessagesPushSettings',
        'can_write' => 'MessagesConversationCanWrite',
        'chat_settings' => 'MessagesChatSettings'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'peer' => null,
        'sort_id' => null,
        'last_message_id' => null,
        'last_conversation_message_id' => null,
        'in_read' => null,
        'out_read' => null,
        'unread_count' => null,
        'is_marked_unread' => null,
        'out_read_by' => null,
        'important' => null,
        'unanswered' => null,
        'special_service_type' => null,
        'message_request_data' => null,
        'mentions' => null,
        'current_keyboard' => null,
        'push_settings' => null,
        'can_write' => null,
        'chat_settings' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'peer' => false,
		'sort_id' => false,
		'last_message_id' => false,
		'last_conversation_message_id' => false,
		'in_read' => false,
		'out_read' => false,
		'unread_count' => false,
		'is_marked_unread' => false,
		'out_read_by' => false,
		'important' => false,
		'unanswered' => false,
		'special_service_type' => false,
		'message_request_data' => false,
		'mentions' => false,
		'current_keyboard' => false,
		'push_settings' => false,
		'can_write' => false,
		'chat_settings' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'peer' => 'peer',
        'sort_id' => 'sort_id',
        'last_message_id' => 'last_message_id',
        'last_conversation_message_id' => 'last_conversation_message_id',
        'in_read' => 'in_read',
        'out_read' => 'out_read',
        'unread_count' => 'unread_count',
        'is_marked_unread' => 'is_marked_unread',
        'out_read_by' => 'out_read_by',
        'important' => 'important',
        'unanswered' => 'unanswered',
        'special_service_type' => 'special_service_type',
        'message_request_data' => 'message_request_data',
        'mentions' => 'mentions',
        'current_keyboard' => 'current_keyboard',
        'push_settings' => 'push_settings',
        'can_write' => 'can_write',
        'chat_settings' => 'chat_settings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'peer' => 'setPeer',
        'sort_id' => 'setSortId',
        'last_message_id' => 'setLastMessageId',
        'last_conversation_message_id' => 'setLastConversationMessageId',
        'in_read' => 'setInRead',
        'out_read' => 'setOutRead',
        'unread_count' => 'setUnreadCount',
        'is_marked_unread' => 'setIsMarkedUnread',
        'out_read_by' => 'setOutReadBy',
        'important' => 'setImportant',
        'unanswered' => 'setUnanswered',
        'special_service_type' => 'setSpecialServiceType',
        'message_request_data' => 'setMessageRequestData',
        'mentions' => 'setMentions',
        'current_keyboard' => 'setCurrentKeyboard',
        'push_settings' => 'setPushSettings',
        'can_write' => 'setCanWrite',
        'chat_settings' => 'setChatSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'peer' => 'getPeer',
        'sort_id' => 'getSortId',
        'last_message_id' => 'getLastMessageId',
        'last_conversation_message_id' => 'getLastConversationMessageId',
        'in_read' => 'getInRead',
        'out_read' => 'getOutRead',
        'unread_count' => 'getUnreadCount',
        'is_marked_unread' => 'getIsMarkedUnread',
        'out_read_by' => 'getOutReadBy',
        'important' => 'getImportant',
        'unanswered' => 'getUnanswered',
        'special_service_type' => 'getSpecialServiceType',
        'message_request_data' => 'getMessageRequestData',
        'mentions' => 'getMentions',
        'current_keyboard' => 'getCurrentKeyboard',
        'push_settings' => 'getPushSettings',
        'can_write' => 'getCanWrite',
        'chat_settings' => 'getChatSettings'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }

    public const SPECIAL_SERVICE_TYPE_BUSINESS_NOTIFY = 'business_notify';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSpecialServiceTypeAllowableValues()
    {
        return [
            self::SPECIAL_SERVICE_TYPE_BUSINESS_NOTIFY,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('peer', $data ?? [], null);
        $this->setIfExists('sort_id', $data ?? [], null);
        $this->setIfExists('last_message_id', $data ?? [], null);
        $this->setIfExists('last_conversation_message_id', $data ?? [], null);
        $this->setIfExists('in_read', $data ?? [], null);
        $this->setIfExists('out_read', $data ?? [], null);
        $this->setIfExists('unread_count', $data ?? [], null);
        $this->setIfExists('is_marked_unread', $data ?? [], null);
        $this->setIfExists('out_read_by', $data ?? [], null);
        $this->setIfExists('important', $data ?? [], null);
        $this->setIfExists('unanswered', $data ?? [], null);
        $this->setIfExists('special_service_type', $data ?? [], null);
        $this->setIfExists('message_request_data', $data ?? [], null);
        $this->setIfExists('mentions', $data ?? [], null);
        $this->setIfExists('current_keyboard', $data ?? [], null);
        $this->setIfExists('push_settings', $data ?? [], null);
        $this->setIfExists('can_write', $data ?? [], null);
        $this->setIfExists('chat_settings', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if (!is_null($this->container['last_message_id']) && ($this->container['last_message_id'] < 0)) {
            $invalidProperties[] = "invalid value for 'last_message_id', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['last_conversation_message_id']) && ($this->container['last_conversation_message_id'] < 0)) {
            $invalidProperties[] = "invalid value for 'last_conversation_message_id', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['in_read']) && ($this->container['in_read'] < 0)) {
            $invalidProperties[] = "invalid value for 'in_read', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['out_read']) && ($this->container['out_read'] < 0)) {
            $invalidProperties[] = "invalid value for 'out_read', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['unread_count']) && ($this->container['unread_count'] < 0)) {
            $invalidProperties[] = "invalid value for 'unread_count', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getSpecialServiceTypeAllowableValues();
        if (!is_null($this->container['special_service_type']) && !in_array($this->container['special_service_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'special_service_type', must be one of '%s'",
                $this->container['special_service_type'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets peer
     *
     * @return MessagesConversationPeer|null
     */
    public function getPeer()
    {
        return $this->container['peer'];
    }

    /**
     * Sets peer
     *
     * @param MessagesConversationPeer|null $peer peer
     *
     * @return self
     */
    public function setPeer($peer)
    {

        if (is_null($peer)) {
            throw new InvalidArgumentException('non-nullable peer cannot be null');
        }

        $this->container['peer'] = $peer;

        return $this;
    }

    /**
     * Gets sort_id
     *
     * @return MessagesConversationSortId|null
     */
    public function getSortId()
    {
        return $this->container['sort_id'];
    }

    /**
     * Sets sort_id
     *
     * @param MessagesConversationSortId|null $sort_id sort_id
     *
     * @return self
     */
    public function setSortId($sort_id)
    {

        if (is_null($sort_id)) {
            throw new InvalidArgumentException('non-nullable sort_id cannot be null');
        }

        $this->container['sort_id'] = $sort_id;

        return $this;
    }

    /**
     * Gets last_message_id
     *
     * @return int|null
     */
    public function getLastMessageId()
    {
        return $this->container['last_message_id'];
    }

    /**
     * Sets last_message_id
     *
     * @param int|null $last_message_id ID of the last message in conversation
     *
     * @return self
     */
    public function setLastMessageId($last_message_id)
    {

        if (!is_null($last_message_id) && ($last_message_id < 0)) {
            throw new InvalidArgumentException('invalid value for $last_message_id when calling MessagesConversation., must be bigger than or equal to 0.');
        }


        if (is_null($last_message_id)) {
            throw new InvalidArgumentException('non-nullable last_message_id cannot be null');
        }

        $this->container['last_message_id'] = $last_message_id;

        return $this;
    }

    /**
     * Gets last_conversation_message_id
     *
     * @return int|null
     */
    public function getLastConversationMessageId()
    {
        return $this->container['last_conversation_message_id'];
    }

    /**
     * Sets last_conversation_message_id
     *
     * @param int|null $last_conversation_message_id Conversation message ID of the last message in conversation
     *
     * @return self
     */
    public function setLastConversationMessageId($last_conversation_message_id)
    {

        if (!is_null($last_conversation_message_id) && ($last_conversation_message_id < 0)) {
            throw new InvalidArgumentException('invalid value for $last_conversation_message_id when calling MessagesConversation., must be bigger than or equal to 0.');
        }


        if (is_null($last_conversation_message_id)) {
            throw new InvalidArgumentException('non-nullable last_conversation_message_id cannot be null');
        }

        $this->container['last_conversation_message_id'] = $last_conversation_message_id;

        return $this;
    }

    /**
     * Gets in_read
     *
     * @return int|null
     */
    public function getInRead()
    {
        return $this->container['in_read'];
    }

    /**
     * Sets in_read
     *
     * @param int|null $in_read Last message user have read
     *
     * @return self
     */
    public function setInRead($in_read)
    {

        if (!is_null($in_read) && ($in_read < 0)) {
            throw new InvalidArgumentException('invalid value for $in_read when calling MessagesConversation., must be bigger than or equal to 0.');
        }


        if (is_null($in_read)) {
            throw new InvalidArgumentException('non-nullable in_read cannot be null');
        }

        $this->container['in_read'] = $in_read;

        return $this;
    }

    /**
     * Gets out_read
     *
     * @return int|null
     */
    public function getOutRead()
    {
        return $this->container['out_read'];
    }

    /**
     * Sets out_read
     *
     * @param int|null $out_read Last outcoming message have been read by the opponent
     *
     * @return self
     */
    public function setOutRead($out_read)
    {

        if (!is_null($out_read) && ($out_read < 0)) {
            throw new InvalidArgumentException('invalid value for $out_read when calling MessagesConversation., must be bigger than or equal to 0.');
        }


        if (is_null($out_read)) {
            throw new InvalidArgumentException('non-nullable out_read cannot be null');
        }

        $this->container['out_read'] = $out_read;

        return $this;
    }

    /**
     * Gets unread_count
     *
     * @return int|null
     */
    public function getUnreadCount()
    {
        return $this->container['unread_count'];
    }

    /**
     * Sets unread_count
     *
     * @param int|null $unread_count Unread messages number
     *
     * @return self
     */
    public function setUnreadCount($unread_count)
    {

        if (!is_null($unread_count) && ($unread_count < 0)) {
            throw new InvalidArgumentException('invalid value for $unread_count when calling MessagesConversation., must be bigger than or equal to 0.');
        }


        if (is_null($unread_count)) {
            throw new InvalidArgumentException('non-nullable unread_count cannot be null');
        }

        $this->container['unread_count'] = $unread_count;

        return $this;
    }

    /**
     * Gets is_marked_unread
     *
     * @return bool|null
     */
    public function getIsMarkedUnread()
    {
        return $this->container['is_marked_unread'];
    }

    /**
     * Sets is_marked_unread
     *
     * @param bool|null $is_marked_unread Is this conversation uread
     *
     * @return self
     */
    public function setIsMarkedUnread($is_marked_unread)
    {

        if (is_null($is_marked_unread)) {
            throw new InvalidArgumentException('non-nullable is_marked_unread cannot be null');
        }

        $this->container['is_marked_unread'] = $is_marked_unread;

        return $this;
    }

    /**
     * Gets out_read_by
     *
     * @return MessagesOutReadBy|null
     */
    public function getOutReadBy()
    {
        return $this->container['out_read_by'];
    }

    /**
     * Sets out_read_by
     *
     * @param MessagesOutReadBy|null $out_read_by out_read_by
     *
     * @return self
     */
    public function setOutReadBy($out_read_by)
    {

        if (is_null($out_read_by)) {
            throw new InvalidArgumentException('non-nullable out_read_by cannot be null');
        }

        $this->container['out_read_by'] = $out_read_by;

        return $this;
    }

    /**
     * Gets important
     *
     * @return bool|null
     */
    public function getImportant()
    {
        return $this->container['important'];
    }

    /**
     * Sets important
     *
     * @param bool|null $important important
     *
     * @return self
     */
    public function setImportant($important)
    {

        if (is_null($important)) {
            throw new InvalidArgumentException('non-nullable important cannot be null');
        }

        $this->container['important'] = $important;

        return $this;
    }

    /**
     * Gets unanswered
     *
     * @return bool|null
     */
    public function getUnanswered()
    {
        return $this->container['unanswered'];
    }

    /**
     * Sets unanswered
     *
     * @param bool|null $unanswered unanswered
     *
     * @return self
     */
    public function setUnanswered($unanswered)
    {

        if (is_null($unanswered)) {
            throw new InvalidArgumentException('non-nullable unanswered cannot be null');
        }

        $this->container['unanswered'] = $unanswered;

        return $this;
    }

    /**
     * Gets special_service_type
     *
     * @return string|null
     */
    public function getSpecialServiceType()
    {
        return $this->container['special_service_type'];
    }

    /**
     * Sets special_service_type
     *
     * @param string|null $special_service_type special_service_type
     *
     * @return self
     */
    public function setSpecialServiceType($special_service_type)
    {
        $allowedValues = $this->getSpecialServiceTypeAllowableValues();
        if (!is_null($special_service_type) && !in_array($special_service_type, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'special_service_type', must be one of '%s'",
                    $special_service_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($special_service_type)) {
            throw new InvalidArgumentException('non-nullable special_service_type cannot be null');
        }

        $this->container['special_service_type'] = $special_service_type;

        return $this;
    }

    /**
     * Gets message_request_data
     *
     * @return MessagesMessageRequestData|null
     */
    public function getMessageRequestData()
    {
        return $this->container['message_request_data'];
    }

    /**
     * Sets message_request_data
     *
     * @param MessagesMessageRequestData|null $message_request_data message_request_data
     *
     * @return self
     */
    public function setMessageRequestData($message_request_data)
    {

        if (is_null($message_request_data)) {
            throw new InvalidArgumentException('non-nullable message_request_data cannot be null');
        }

        $this->container['message_request_data'] = $message_request_data;

        return $this;
    }

    /**
     * Gets mentions
     *
     * @return int[]|null
     */
    public function getMentions()
    {
        return $this->container['mentions'];
    }

    /**
     * Sets mentions
     *
     * @param int[]|null $mentions Ids of messages with mentions
     *
     * @return self
     */
    public function setMentions($mentions)
    {

        if (is_null($mentions)) {
            throw new InvalidArgumentException('non-nullable mentions cannot be null');
        }

        $this->container['mentions'] = $mentions;

        return $this;
    }

    /**
     * Gets current_keyboard
     *
     * @return MessagesKeyboard|null
     */
    public function getCurrentKeyboard()
    {
        return $this->container['current_keyboard'];
    }

    /**
     * Sets current_keyboard
     *
     * @param MessagesKeyboard|null $current_keyboard current_keyboard
     *
     * @return self
     */
    public function setCurrentKeyboard($current_keyboard)
    {

        if (is_null($current_keyboard)) {
            throw new InvalidArgumentException('non-nullable current_keyboard cannot be null');
        }

        $this->container['current_keyboard'] = $current_keyboard;

        return $this;
    }

    /**
     * Gets push_settings
     *
     * @return MessagesPushSettings|null
     */
    public function getPushSettings()
    {
        return $this->container['push_settings'];
    }

    /**
     * Sets push_settings
     *
     * @param MessagesPushSettings|null $push_settings push_settings
     *
     * @return self
     */
    public function setPushSettings($push_settings)
    {

        if (is_null($push_settings)) {
            throw new InvalidArgumentException('non-nullable push_settings cannot be null');
        }

        $this->container['push_settings'] = $push_settings;

        return $this;
    }

    /**
     * Gets can_write
     *
     * @return MessagesConversationCanWrite|null
     */
    public function getCanWrite()
    {
        return $this->container['can_write'];
    }

    /**
     * Sets can_write
     *
     * @param MessagesConversationCanWrite|null $can_write can_write
     *
     * @return self
     */
    public function setCanWrite($can_write)
    {

        if (is_null($can_write)) {
            throw new InvalidArgumentException('non-nullable can_write cannot be null');
        }

        $this->container['can_write'] = $can_write;

        return $this;
    }

    /**
     * Gets chat_settings
     *
     * @return MessagesChatSettings|null
     */
    public function getChatSettings()
    {
        return $this->container['chat_settings'];
    }

    /**
     * Sets chat_settings
     *
     * @param MessagesChatSettings|null $chat_settings chat_settings
     *
     * @return self
     */
    public function setChatSettings($chat_settings)
    {

        if (is_null($chat_settings)) {
            throw new InvalidArgumentException('non-nullable chat_settings cannot be null');
        }

        $this->container['chat_settings'] = $chat_settings;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


