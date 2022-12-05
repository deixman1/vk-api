<?php
/**
 * MessagesGetConversationsResponseResponse
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
 * MessagesGetConversationsResponseResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class MessagesGetConversationsResponseResponse implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'messages_getConversations_response_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'count' => 'int',
        'unread_count' => 'int',
        'items' => 'MessagesConversationWithMessage[]',
        'profiles' => '\OpenAPI\Client\Model\UsersUserFull[]',
        'groups' => '\OpenAPI\Client\Model\GroupsGroupFull[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'count' => null,
        'unread_count' => null,
        'items' => null,
        'profiles' => null,
        'groups' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'count' => false,
		'unread_count' => false,
		'items' => false,
		'profiles' => false,
		'groups' => false
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
        'count' => 'count',
        'unread_count' => 'unread_count',
        'items' => 'items',
        'profiles' => 'profiles',
        'groups' => 'groups'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'count' => 'setCount',
        'unread_count' => 'setUnreadCount',
        'items' => 'setItems',
        'profiles' => 'setProfiles',
        'groups' => 'setGroups'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'count' => 'getCount',
        'unread_count' => 'getUnreadCount',
        'items' => 'getItems',
        'profiles' => 'getProfiles',
        'groups' => 'getGroups'
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
        $this->setIfExists('count', $data ?? [], null);
        $this->setIfExists('unread_count', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('profiles', $data ?? [], null);
        $this->setIfExists('groups', $data ?? [], null);
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
     * Gets count
     *
     * @return int|null
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int|null $count Total number
     *
     * @return self
     */
    public function setCount($count)
    {

        if (is_null($count)) {
            throw new InvalidArgumentException('non-nullable count cannot be null');
        }

        $this->container['count'] = $count;

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
     * @param int|null $unread_count Unread dialogs number
     *
     * @return self
     */
    public function setUnreadCount($unread_count)
    {

        if (is_null($unread_count)) {
            throw new InvalidArgumentException('non-nullable unread_count cannot be null');
        }

        $this->container['unread_count'] = $unread_count;

        return $this;
    }

    /**
     * Gets items
     *
     * @return MessagesConversationWithMessage[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param MessagesConversationWithMessage[]|null $items items
     *
     * @return self
     */
    public function setItems($items)
    {

        if (is_null($items)) {
            throw new InvalidArgumentException('non-nullable items cannot be null');
        }

        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets profiles
     *
     * @return OpenAPI\Client\Model\UsersUserFull[]|null
     */
    public function getProfiles()
    {
        return $this->container['profiles'];
    }

    /**
     * Sets profiles
     *
     * @param OpenAPI\Client\Model\UsersUserFull[]|null $profiles profiles
     *
     * @return self
     */
    public function setProfiles($profiles)
    {

        if (is_null($profiles)) {
            throw new InvalidArgumentException('non-nullable profiles cannot be null');
        }

        $this->container['profiles'] = $profiles;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return OpenAPI\Client\Model\GroupsGroupFull[]|null
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param OpenAPI\Client\Model\GroupsGroupFull[]|null $groups groups
     *
     * @return self
     */
    public function setGroups($groups)
    {

        if (is_null($groups)) {
            throw new InvalidArgumentException('non-nullable groups cannot be null');
        }

        $this->container['groups'] = $groups;

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


