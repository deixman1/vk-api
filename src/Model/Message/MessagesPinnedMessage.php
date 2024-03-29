<?php
/**
 * MessagesPinnedMessage
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
 * MessagesPinnedMessage Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class MessagesPinnedMessage implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'messages_pinned_message';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'attachments' => 'MessagesMessageAttachment[]',
        'conversation_message_id' => 'int',
        'id' => 'int',
        'date' => 'int',
        'from_id' => 'int',
        'fwd_messages' => 'MessagesForeignMessage[]',
        'geo' => '\OpenAPI\Client\Model\BaseGeo',
        'peer_id' => 'int',
        'reply_message' => 'MessagesForeignMessage',
        'text' => 'string',
        'keyboard' => 'MessagesKeyboard'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'attachments' => null,
        'conversation_message_id' => null,
        'id' => null,
        'date' => null,
        'from_id' => 'int64',
        'fwd_messages' => null,
        'geo' => null,
        'peer_id' => null,
        'reply_message' => null,
        'text' => null,
        'keyboard' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'attachments' => false,
		'conversation_message_id' => false,
		'id' => false,
		'date' => false,
		'from_id' => false,
		'fwd_messages' => false,
		'geo' => false,
		'peer_id' => false,
		'reply_message' => false,
		'text' => false,
		'keyboard' => false
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
        'attachments' => 'attachments',
        'conversation_message_id' => 'conversation_message_id',
        'id' => 'id',
        'date' => 'date',
        'from_id' => 'from_id',
        'fwd_messages' => 'fwd_messages',
        'geo' => 'geo',
        'peer_id' => 'peer_id',
        'reply_message' => 'reply_message',
        'text' => 'text',
        'keyboard' => 'keyboard'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attachments' => 'setAttachments',
        'conversation_message_id' => 'setConversationMessageId',
        'id' => 'setId',
        'date' => 'setDate',
        'from_id' => 'setFromId',
        'fwd_messages' => 'setFwdMessages',
        'geo' => 'setGeo',
        'peer_id' => 'setPeerId',
        'reply_message' => 'setReplyMessage',
        'text' => 'setText',
        'keyboard' => 'setKeyboard'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attachments' => 'getAttachments',
        'conversation_message_id' => 'getConversationMessageId',
        'id' => 'getId',
        'date' => 'getDate',
        'from_id' => 'getFromId',
        'fwd_messages' => 'getFwdMessages',
        'geo' => 'getGeo',
        'peer_id' => 'getPeerId',
        'reply_message' => 'getReplyMessage',
        'text' => 'getText',
        'keyboard' => 'getKeyboard'
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
        $this->setIfExists('attachments', $data ?? [], null);
        $this->setIfExists('conversation_message_id', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('from_id', $data ?? [], null);
        $this->setIfExists('fwd_messages', $data ?? [], null);
        $this->setIfExists('geo', $data ?? [], null);
        $this->setIfExists('peer_id', $data ?? [], null);
        $this->setIfExists('reply_message', $data ?? [], null);
        $this->setIfExists('text', $data ?? [], null);
        $this->setIfExists('keyboard', $data ?? [], null);
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
     * Gets attachments
     *
     * @return MessagesMessageAttachment[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param MessagesMessageAttachment[]|null $attachments attachments
     *
     * @return self
     */
    public function setAttachments($attachments)
    {

        if (is_null($attachments)) {
            throw new InvalidArgumentException('non-nullable attachments cannot be null');
        }

        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets conversation_message_id
     *
     * @return int|null
     */
    public function getConversationMessageId()
    {
        return $this->container['conversation_message_id'];
    }

    /**
     * Sets conversation_message_id
     *
     * @param int|null $conversation_message_id Unique auto-incremented number for all messages with this peer
     *
     * @return self
     */
    public function setConversationMessageId($conversation_message_id)
    {

        if (is_null($conversation_message_id)) {
            throw new InvalidArgumentException('non-nullable conversation_message_id cannot be null');
        }

        $this->container['conversation_message_id'] = $conversation_message_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Message ID
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets date
     *
     * @return int|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param int|null $date Date when the message has been sent in Unixtime
     *
     * @return self
     */
    public function setDate($date)
    {

        if (is_null($date)) {
            throw new InvalidArgumentException('non-nullable date cannot be null');
        }

        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets from_id
     *
     * @return int|null
     */
    public function getFromId()
    {
        return $this->container['from_id'];
    }

    /**
     * Sets from_id
     *
     * @param int|null $from_id Message author's ID
     *
     * @return self
     */
    public function setFromId($from_id)
    {

        if (is_null($from_id)) {
            throw new InvalidArgumentException('non-nullable from_id cannot be null');
        }

        $this->container['from_id'] = $from_id;

        return $this;
    }

    /**
     * Gets fwd_messages
     *
     * @return MessagesForeignMessage[]|null
     */
    public function getFwdMessages()
    {
        return $this->container['fwd_messages'];
    }

    /**
     * Sets fwd_messages
     *
     * @param MessagesForeignMessage[]|null $fwd_messages Forwarded messages
     *
     * @return self
     */
    public function setFwdMessages($fwd_messages)
    {

        if (is_null($fwd_messages)) {
            throw new InvalidArgumentException('non-nullable fwd_messages cannot be null');
        }

        $this->container['fwd_messages'] = $fwd_messages;

        return $this;
    }

    /**
     * Gets geo
     *
     * @return OpenAPI\Client\Model\BaseGeo|null
     */
    public function getGeo()
    {
        return $this->container['geo'];
    }

    /**
     * Sets geo
     *
     * @param OpenAPI\Client\Model\BaseGeo|null $geo geo
     *
     * @return self
     */
    public function setGeo($geo)
    {

        if (is_null($geo)) {
            throw new InvalidArgumentException('non-nullable geo cannot be null');
        }

        $this->container['geo'] = $geo;

        return $this;
    }

    /**
     * Gets peer_id
     *
     * @return int|null
     */
    public function getPeerId()
    {
        return $this->container['peer_id'];
    }

    /**
     * Sets peer_id
     *
     * @param int|null $peer_id Peer ID
     *
     * @return self
     */
    public function setPeerId($peer_id)
    {

        if (is_null($peer_id)) {
            throw new InvalidArgumentException('non-nullable peer_id cannot be null');
        }

        $this->container['peer_id'] = $peer_id;

        return $this;
    }

    /**
     * Gets reply_message
     *
     * @return MessagesForeignMessage|null
     */
    public function getReplyMessage()
    {
        return $this->container['reply_message'];
    }

    /**
     * Sets reply_message
     *
     * @param MessagesForeignMessage|null $reply_message reply_message
     *
     * @return self
     */
    public function setReplyMessage($reply_message)
    {

        if (is_null($reply_message)) {
            throw new InvalidArgumentException('non-nullable reply_message cannot be null');
        }

        $this->container['reply_message'] = $reply_message;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text Message text
     *
     * @return self
     */
    public function setText($text)
    {

        if (is_null($text)) {
            throw new InvalidArgumentException('non-nullable text cannot be null');
        }

        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets keyboard
     *
     * @return MessagesKeyboard|null
     */
    public function getKeyboard()
    {
        return $this->container['keyboard'];
    }

    /**
     * Sets keyboard
     *
     * @param MessagesKeyboard|null $keyboard keyboard
     *
     * @return self
     */
    public function setKeyboard($keyboard)
    {

        if (is_null($keyboard)) {
            throw new InvalidArgumentException('non-nullable keyboard cannot be null');
        }

        $this->container['keyboard'] = $keyboard;

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


