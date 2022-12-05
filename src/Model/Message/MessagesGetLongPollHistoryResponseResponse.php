<?php
/**
 * MessagesGetLongPollHistoryResponseResponse
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
 * MessagesGetLongPollHistoryResponseResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class MessagesGetLongPollHistoryResponseResponse implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'messages_getLongPollHistory_response_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'history' => 'int[][]',
        'messages' => 'MessagesLongpollMessages',
        'credentials' => 'MessagesLongpollParams',
        'profiles' => '\OpenAPI\Client\Model\UsersUserFull[]',
        'groups' => '\OpenAPI\Client\Model\GroupsGroupFull[]',
        'chats' => 'MessagesChat[]',
        'new_pts' => 'int',
        'from_pts' => 'int',
        'more' => 'bool',
        'conversations' => 'MessagesConversation[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'history' => null,
        'messages' => null,
        'credentials' => null,
        'profiles' => null,
        'groups' => null,
        'chats' => null,
        'new_pts' => null,
        'from_pts' => null,
        'more' => null,
        'conversations' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'history' => false,
		'messages' => false,
		'credentials' => false,
		'profiles' => false,
		'groups' => false,
		'chats' => false,
		'new_pts' => false,
		'from_pts' => false,
		'more' => false,
		'conversations' => false
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
        'history' => 'history',
        'messages' => 'messages',
        'credentials' => 'credentials',
        'profiles' => 'profiles',
        'groups' => 'groups',
        'chats' => 'chats',
        'new_pts' => 'new_pts',
        'from_pts' => 'from_pts',
        'more' => 'more',
        'conversations' => 'conversations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'history' => 'setHistory',
        'messages' => 'setMessages',
        'credentials' => 'setCredentials',
        'profiles' => 'setProfiles',
        'groups' => 'setGroups',
        'chats' => 'setChats',
        'new_pts' => 'setNewPts',
        'from_pts' => 'setFromPts',
        'more' => 'setMore',
        'conversations' => 'setConversations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'history' => 'getHistory',
        'messages' => 'getMessages',
        'credentials' => 'getCredentials',
        'profiles' => 'getProfiles',
        'groups' => 'getGroups',
        'chats' => 'getChats',
        'new_pts' => 'getNewPts',
        'from_pts' => 'getFromPts',
        'more' => 'getMore',
        'conversations' => 'getConversations'
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
        $this->setIfExists('history', $data ?? [], null);
        $this->setIfExists('messages', $data ?? [], null);
        $this->setIfExists('credentials', $data ?? [], null);
        $this->setIfExists('profiles', $data ?? [], null);
        $this->setIfExists('groups', $data ?? [], null);
        $this->setIfExists('chats', $data ?? [], null);
        $this->setIfExists('new_pts', $data ?? [], null);
        $this->setIfExists('from_pts', $data ?? [], null);
        $this->setIfExists('more', $data ?? [], null);
        $this->setIfExists('conversations', $data ?? [], null);
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
     * Gets history
     *
     * @return int[][]|null
     */
    public function getHistory()
    {
        return $this->container['history'];
    }

    /**
     * Sets history
     *
     * @param int[][]|null $history history
     *
     * @return self
     */
    public function setHistory($history)
    {

        if (is_null($history)) {
            throw new InvalidArgumentException('non-nullable history cannot be null');
        }

        $this->container['history'] = $history;

        return $this;
    }

    /**
     * Gets messages
     *
     * @return MessagesLongpollMessages|null
     */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     *
     * @param MessagesLongpollMessages|null $messages messages
     *
     * @return self
     */
    public function setMessages($messages)
    {

        if (is_null($messages)) {
            throw new InvalidArgumentException('non-nullable messages cannot be null');
        }

        $this->container['messages'] = $messages;

        return $this;
    }

    /**
     * Gets credentials
     *
     * @return MessagesLongpollParams|null
     */
    public function getCredentials()
    {
        return $this->container['credentials'];
    }

    /**
     * Sets credentials
     *
     * @param MessagesLongpollParams|null $credentials credentials
     *
     * @return self
     */
    public function setCredentials($credentials)
    {

        if (is_null($credentials)) {
            throw new InvalidArgumentException('non-nullable credentials cannot be null');
        }

        $this->container['credentials'] = $credentials;

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
     * Gets chats
     *
     * @return MessagesChat[]|null
     */
    public function getChats()
    {
        return $this->container['chats'];
    }

    /**
     * Sets chats
     *
     * @param MessagesChat[]|null $chats chats
     *
     * @return self
     */
    public function setChats($chats)
    {

        if (is_null($chats)) {
            throw new InvalidArgumentException('non-nullable chats cannot be null');
        }

        $this->container['chats'] = $chats;

        return $this;
    }

    /**
     * Gets new_pts
     *
     * @return int|null
     */
    public function getNewPts()
    {
        return $this->container['new_pts'];
    }

    /**
     * Sets new_pts
     *
     * @param int|null $new_pts Persistence timestamp
     *
     * @return self
     */
    public function setNewPts($new_pts)
    {

        if (is_null($new_pts)) {
            throw new InvalidArgumentException('non-nullable new_pts cannot be null');
        }

        $this->container['new_pts'] = $new_pts;

        return $this;
    }

    /**
     * Gets from_pts
     *
     * @return int|null
     */
    public function getFromPts()
    {
        return $this->container['from_pts'];
    }

    /**
     * Sets from_pts
     *
     * @param int|null $from_pts from_pts
     *
     * @return self
     */
    public function setFromPts($from_pts)
    {

        if (is_null($from_pts)) {
            throw new InvalidArgumentException('non-nullable from_pts cannot be null');
        }

        $this->container['from_pts'] = $from_pts;

        return $this;
    }

    /**
     * Gets more
     *
     * @return bool|null
     */
    public function getMore()
    {
        return $this->container['more'];
    }

    /**
     * Sets more
     *
     * @param bool|null $more Has more
     *
     * @return self
     */
    public function setMore($more)
    {

        if (is_null($more)) {
            throw new InvalidArgumentException('non-nullable more cannot be null');
        }

        $this->container['more'] = $more;

        return $this;
    }

    /**
     * Gets conversations
     *
     * @return MessagesConversation[]|null
     */
    public function getConversations()
    {
        return $this->container['conversations'];
    }

    /**
     * Sets conversations
     *
     * @param MessagesConversation[]|null $conversations conversations
     *
     * @return self
     */
    public function setConversations($conversations)
    {

        if (is_null($conversations)) {
            throw new InvalidArgumentException('non-nullable conversations cannot be null');
        }

        $this->container['conversations'] = $conversations;

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


