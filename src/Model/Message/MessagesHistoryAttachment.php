<?php
/**
 * MessagesHistoryAttachment
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
 * MessagesHistoryAttachment Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class MessagesHistoryAttachment implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'messages_history_attachment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'attachment' => 'MessagesHistoryMessageAttachment',
        'message_id' => 'int',
        'from_id' => 'int',
        'forward_level' => 'int',
        'was_listened' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'attachment' => null,
        'message_id' => null,
        'from_id' => 'int64',
        'forward_level' => null,
        'was_listened' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'attachment' => false,
		'message_id' => false,
		'from_id' => false,
		'forward_level' => false,
		'was_listened' => false
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
        'attachment' => 'attachment',
        'message_id' => 'message_id',
        'from_id' => 'from_id',
        'forward_level' => 'forward_level',
        'was_listened' => 'was_listened'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attachment' => 'setAttachment',
        'message_id' => 'setMessageId',
        'from_id' => 'setFromId',
        'forward_level' => 'setForwardLevel',
        'was_listened' => 'setWasListened'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attachment' => 'getAttachment',
        'message_id' => 'getMessageId',
        'from_id' => 'getFromId',
        'forward_level' => 'getForwardLevel',
        'was_listened' => 'getWasListened'
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
        $this->setIfExists('attachment', $data ?? [], null);
        $this->setIfExists('message_id', $data ?? [], null);
        $this->setIfExists('from_id', $data ?? [], null);
        $this->setIfExists('forward_level', $data ?? [], null);
        $this->setIfExists('was_listened', $data ?? [], null);
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
     * Gets attachment
     *
     * @return MessagesHistoryMessageAttachment|null
     */
    public function getAttachment()
    {
        return $this->container['attachment'];
    }

    /**
     * Sets attachment
     *
     * @param MessagesHistoryMessageAttachment|null $attachment attachment
     *
     * @return self
     */
    public function setAttachment($attachment)
    {

        if (is_null($attachment)) {
            throw new InvalidArgumentException('non-nullable attachment cannot be null');
        }

        $this->container['attachment'] = $attachment;

        return $this;
    }

    /**
     * Gets message_id
     *
     * @return int|null
     */
    public function getMessageId()
    {
        return $this->container['message_id'];
    }

    /**
     * Sets message_id
     *
     * @param int|null $message_id Message ID
     *
     * @return self
     */
    public function setMessageId($message_id)
    {

        if (is_null($message_id)) {
            throw new InvalidArgumentException('non-nullable message_id cannot be null');
        }

        $this->container['message_id'] = $message_id;

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
     * Gets forward_level
     *
     * @return int|null
     */
    public function getForwardLevel()
    {
        return $this->container['forward_level'];
    }

    /**
     * Sets forward_level
     *
     * @param int|null $forward_level Forward level (optional)
     *
     * @return self
     */
    public function setForwardLevel($forward_level)
    {

        if (is_null($forward_level)) {
            throw new InvalidArgumentException('non-nullable forward_level cannot be null');
        }

        $this->container['forward_level'] = $forward_level;

        return $this;
    }

    /**
     * Gets was_listened
     *
     * @return bool|null
     */
    public function getWasListened()
    {
        return $this->container['was_listened'];
    }

    /**
     * Sets was_listened
     *
     * @param bool|null $was_listened was_listened
     *
     * @return self
     */
    public function setWasListened($was_listened)
    {

        if (is_null($was_listened)) {
            throw new InvalidArgumentException('non-nullable was_listened cannot be null');
        }

        $this->container['was_listened'] = $was_listened;

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


