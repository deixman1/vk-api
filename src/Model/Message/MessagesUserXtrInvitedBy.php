<?php
/**
 * MessagesUserXtrInvitedBy
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
 * MessagesUserXtrInvitedBy Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class MessagesUserXtrInvitedBy implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'messages_user_xtr_invited_by';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'deactivated' => 'string',
        'first_name' => 'string',
        'hidden' => 'int',
        'id' => 'int',
        'last_name' => 'string',
        'can_access_closed' => 'bool',
        'is_closed' => 'bool',
        'sex' => 'int',
        'screen_name' => 'string',
        'photo_50' => 'string',
        'photo_100' => 'string',
        'online_info' => '\OpenAPI\Client\Model\UsersOnlineInfo',
        'online' => 'int',
        'online_mobile' => 'int',
        'online_app' => 'int',
        'verified' => 'int',
        'trending' => 'int',
        'friend_status' => '\OpenAPI\Client\Model\FriendsFriendStatusStatus',
        'mutual' => '\OpenAPI\Client\Model\FriendsRequestsMutual',
        'type' => '\OpenAPI\Client\Model\UsersUserType',
        'invited_by' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'deactivated' => null,
        'first_name' => null,
        'hidden' => null,
        'id' => 'int64',
        'last_name' => null,
        'can_access_closed' => null,
        'is_closed' => null,
        'sex' => null,
        'screen_name' => null,
        'photo_50' => 'uri',
        'photo_100' => 'uri',
        'online_info' => null,
        'online' => null,
        'online_mobile' => null,
        'online_app' => null,
        'verified' => null,
        'trending' => null,
        'friend_status' => null,
        'mutual' => null,
        'type' => null,
        'invited_by' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'deactivated' => false,
		'first_name' => false,
		'hidden' => false,
		'id' => false,
		'last_name' => false,
		'can_access_closed' => false,
		'is_closed' => false,
		'sex' => false,
		'screen_name' => false,
		'photo_50' => false,
		'photo_100' => false,
		'online_info' => false,
		'online' => false,
		'online_mobile' => false,
		'online_app' => false,
		'verified' => false,
		'trending' => false,
		'friend_status' => false,
		'mutual' => false,
		'type' => false,
		'invited_by' => false
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
        'deactivated' => 'deactivated',
        'first_name' => 'first_name',
        'hidden' => 'hidden',
        'id' => 'id',
        'last_name' => 'last_name',
        'can_access_closed' => 'can_access_closed',
        'is_closed' => 'is_closed',
        'sex' => 'sex',
        'screen_name' => 'screen_name',
        'photo_50' => 'photo_50',
        'photo_100' => 'photo_100',
        'online_info' => 'online_info',
        'online' => 'online',
        'online_mobile' => 'online_mobile',
        'online_app' => 'online_app',
        'verified' => 'verified',
        'trending' => 'trending',
        'friend_status' => 'friend_status',
        'mutual' => 'mutual',
        'type' => 'type',
        'invited_by' => 'invited_by'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'deactivated' => 'setDeactivated',
        'first_name' => 'setFirstName',
        'hidden' => 'setHidden',
        'id' => 'setId',
        'last_name' => 'setLastName',
        'can_access_closed' => 'setCanAccessClosed',
        'is_closed' => 'setIsClosed',
        'sex' => 'setSex',
        'screen_name' => 'setScreenName',
        'photo_50' => 'setPhoto50',
        'photo_100' => 'setPhoto100',
        'online_info' => 'setOnlineInfo',
        'online' => 'setOnline',
        'online_mobile' => 'setOnlineMobile',
        'online_app' => 'setOnlineApp',
        'verified' => 'setVerified',
        'trending' => 'setTrending',
        'friend_status' => 'setFriendStatus',
        'mutual' => 'setMutual',
        'type' => 'setType',
        'invited_by' => 'setInvitedBy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'deactivated' => 'getDeactivated',
        'first_name' => 'getFirstName',
        'hidden' => 'getHidden',
        'id' => 'getId',
        'last_name' => 'getLastName',
        'can_access_closed' => 'getCanAccessClosed',
        'is_closed' => 'getIsClosed',
        'sex' => 'getSex',
        'screen_name' => 'getScreenName',
        'photo_50' => 'getPhoto50',
        'photo_100' => 'getPhoto100',
        'online_info' => 'getOnlineInfo',
        'online' => 'getOnline',
        'online_mobile' => 'getOnlineMobile',
        'online_app' => 'getOnlineApp',
        'verified' => 'getVerified',
        'trending' => 'getTrending',
        'friend_status' => 'getFriendStatus',
        'mutual' => 'getMutual',
        'type' => 'getType',
        'invited_by' => 'getInvitedBy'
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

    public const SEX_0 = 0;
    public const SEX_1 = 1;
    public const SEX_2 = 2;
    public const ONLINE_0 = 0;
    public const ONLINE_1 = 1;
    public const ONLINE_MOBILE_0 = 0;
    public const ONLINE_MOBILE_1 = 1;
    public const VERIFIED_0 = 0;
    public const VERIFIED_1 = 1;
    public const TRENDING_0 = 0;
    public const TRENDING_1 = 1;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSexAllowableValues()
    {
        return [
            self::SEX_0,
            self::SEX_1,
            self::SEX_2,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOnlineAllowableValues()
    {
        return [
            self::ONLINE_0,
            self::ONLINE_1,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOnlineMobileAllowableValues()
    {
        return [
            self::ONLINE_MOBILE_0,
            self::ONLINE_MOBILE_1,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVerifiedAllowableValues()
    {
        return [
            self::VERIFIED_0,
            self::VERIFIED_1,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTrendingAllowableValues()
    {
        return [
            self::TRENDING_0,
            self::TRENDING_1,
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
        $this->setIfExists('deactivated', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('hidden', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('can_access_closed', $data ?? [], null);
        $this->setIfExists('is_closed', $data ?? [], null);
        $this->setIfExists('sex', $data ?? [], null);
        $this->setIfExists('screen_name', $data ?? [], null);
        $this->setIfExists('photo_50', $data ?? [], null);
        $this->setIfExists('photo_100', $data ?? [], null);
        $this->setIfExists('online_info', $data ?? [], null);
        $this->setIfExists('online', $data ?? [], null);
        $this->setIfExists('online_mobile', $data ?? [], null);
        $this->setIfExists('online_app', $data ?? [], null);
        $this->setIfExists('verified', $data ?? [], null);
        $this->setIfExists('trending', $data ?? [], null);
        $this->setIfExists('friend_status', $data ?? [], null);
        $this->setIfExists('mutual', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('invited_by', $data ?? [], null);
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

        $allowedValues = $this->getSexAllowableValues();
        if (!is_null($this->container['sex']) && !in_array($this->container['sex'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sex', must be one of '%s'",
                $this->container['sex'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOnlineAllowableValues();
        if (!is_null($this->container['online']) && !in_array($this->container['online'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'online', must be one of '%s'",
                $this->container['online'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOnlineMobileAllowableValues();
        if (!is_null($this->container['online_mobile']) && !in_array($this->container['online_mobile'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'online_mobile', must be one of '%s'",
                $this->container['online_mobile'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getVerifiedAllowableValues();
        if (!is_null($this->container['verified']) && !in_array($this->container['verified'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'verified', must be one of '%s'",
                $this->container['verified'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTrendingAllowableValues();
        if (!is_null($this->container['trending']) && !in_array($this->container['trending'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'trending', must be one of '%s'",
                $this->container['trending'],
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
     * Gets deactivated
     *
     * @return string|null
     */
    public function getDeactivated()
    {
        return $this->container['deactivated'];
    }

    /**
     * Sets deactivated
     *
     * @param string|null $deactivated Returns if a profile is deleted or blocked
     *
     * @return self
     */
    public function setDeactivated($deactivated)
    {

        if (is_null($deactivated)) {
            throw new InvalidArgumentException('non-nullable deactivated cannot be null');
        }

        $this->container['deactivated'] = $deactivated;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name User first name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {

        if (is_null($first_name)) {
            throw new InvalidArgumentException('non-nullable first_name cannot be null');
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets hidden
     *
     * @return int|null
     */
    public function getHidden()
    {
        return $this->container['hidden'];
    }

    /**
     * Sets hidden
     *
     * @param int|null $hidden Returns if a profile is hidden.
     *
     * @return self
     */
    public function setHidden($hidden)
    {

        if (is_null($hidden)) {
            throw new InvalidArgumentException('non-nullable hidden cannot be null');
        }

        $this->container['hidden'] = $hidden;

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
     * @param int|null $id User ID
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
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name User last name
     *
     * @return self
     */
    public function setLastName($last_name)
    {

        if (is_null($last_name)) {
            throw new InvalidArgumentException('non-nullable last_name cannot be null');
        }

        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets can_access_closed
     *
     * @return bool|null
     */
    public function getCanAccessClosed()
    {
        return $this->container['can_access_closed'];
    }

    /**
     * Sets can_access_closed
     *
     * @param bool|null $can_access_closed can_access_closed
     *
     * @return self
     */
    public function setCanAccessClosed($can_access_closed)
    {

        if (is_null($can_access_closed)) {
            throw new InvalidArgumentException('non-nullable can_access_closed cannot be null');
        }

        $this->container['can_access_closed'] = $can_access_closed;

        return $this;
    }

    /**
     * Gets is_closed
     *
     * @return bool|null
     */
    public function getIsClosed()
    {
        return $this->container['is_closed'];
    }

    /**
     * Sets is_closed
     *
     * @param bool|null $is_closed is_closed
     *
     * @return self
     */
    public function setIsClosed($is_closed)
    {

        if (is_null($is_closed)) {
            throw new InvalidArgumentException('non-nullable is_closed cannot be null');
        }

        $this->container['is_closed'] = $is_closed;

        return $this;
    }

    /**
     * Gets sex
     *
     * @return int|null
     */
    public function getSex()
    {
        return $this->container['sex'];
    }

    /**
     * Sets sex
     *
     * @param int|null $sex User sex
     *
     * @return self
     */
    public function setSex($sex)
    {
        $allowedValues = $this->getSexAllowableValues();
        if (!is_null($sex) && !in_array($sex, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sex', must be one of '%s'",
                    $sex,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($sex)) {
            throw new InvalidArgumentException('non-nullable sex cannot be null');
        }

        $this->container['sex'] = $sex;

        return $this;
    }

    /**
     * Gets screen_name
     *
     * @return string|null
     */
    public function getScreenName()
    {
        return $this->container['screen_name'];
    }

    /**
     * Sets screen_name
     *
     * @param string|null $screen_name Domain name of the user's page
     *
     * @return self
     */
    public function setScreenName($screen_name)
    {

        if (is_null($screen_name)) {
            throw new InvalidArgumentException('non-nullable screen_name cannot be null');
        }

        $this->container['screen_name'] = $screen_name;

        return $this;
    }

    /**
     * Gets photo_50
     *
     * @return string|null
     */
    public function getPhoto50()
    {
        return $this->container['photo_50'];
    }

    /**
     * Sets photo_50
     *
     * @param string|null $photo_50 URL of square photo of the user with 50 pixels in width
     *
     * @return self
     */
    public function setPhoto50($photo_50)
    {

        if (is_null($photo_50)) {
            throw new InvalidArgumentException('non-nullable photo_50 cannot be null');
        }

        $this->container['photo_50'] = $photo_50;

        return $this;
    }

    /**
     * Gets photo_100
     *
     * @return string|null
     */
    public function getPhoto100()
    {
        return $this->container['photo_100'];
    }

    /**
     * Sets photo_100
     *
     * @param string|null $photo_100 URL of square photo of the user with 100 pixels in width
     *
     * @return self
     */
    public function setPhoto100($photo_100)
    {

        if (is_null($photo_100)) {
            throw new InvalidArgumentException('non-nullable photo_100 cannot be null');
        }

        $this->container['photo_100'] = $photo_100;

        return $this;
    }

    /**
     * Gets online_info
     *
     * @return OpenAPI\Client\Model\UsersOnlineInfo|null
     */
    public function getOnlineInfo()
    {
        return $this->container['online_info'];
    }

    /**
     * Sets online_info
     *
     * @param OpenAPI\Client\Model\UsersOnlineInfo|null $online_info online_info
     *
     * @return self
     */
    public function setOnlineInfo($online_info)
    {

        if (is_null($online_info)) {
            throw new InvalidArgumentException('non-nullable online_info cannot be null');
        }

        $this->container['online_info'] = $online_info;

        return $this;
    }

    /**
     * Gets online
     *
     * @return int|null
     */
    public function getOnline()
    {
        return $this->container['online'];
    }

    /**
     * Sets online
     *
     * @param int|null $online Information whether the user is online
     *
     * @return self
     */
    public function setOnline($online)
    {
        $allowedValues = $this->getOnlineAllowableValues();
        if (!is_null($online) && !in_array($online, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'online', must be one of '%s'",
                    $online,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($online)) {
            throw new InvalidArgumentException('non-nullable online cannot be null');
        }

        $this->container['online'] = $online;

        return $this;
    }

    /**
     * Gets online_mobile
     *
     * @return int|null
     */
    public function getOnlineMobile()
    {
        return $this->container['online_mobile'];
    }

    /**
     * Sets online_mobile
     *
     * @param int|null $online_mobile Information whether the user is online in mobile site or application
     *
     * @return self
     */
    public function setOnlineMobile($online_mobile)
    {
        $allowedValues = $this->getOnlineMobileAllowableValues();
        if (!is_null($online_mobile) && !in_array($online_mobile, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'online_mobile', must be one of '%s'",
                    $online_mobile,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($online_mobile)) {
            throw new InvalidArgumentException('non-nullable online_mobile cannot be null');
        }

        $this->container['online_mobile'] = $online_mobile;

        return $this;
    }

    /**
     * Gets online_app
     *
     * @return int|null
     */
    public function getOnlineApp()
    {
        return $this->container['online_app'];
    }

    /**
     * Sets online_app
     *
     * @param int|null $online_app Application ID
     *
     * @return self
     */
    public function setOnlineApp($online_app)
    {

        if (is_null($online_app)) {
            throw new InvalidArgumentException('non-nullable online_app cannot be null');
        }

        $this->container['online_app'] = $online_app;

        return $this;
    }

    /**
     * Gets verified
     *
     * @return int|null
     */
    public function getVerified()
    {
        return $this->container['verified'];
    }

    /**
     * Sets verified
     *
     * @param int|null $verified Information whether the user is verified
     *
     * @return self
     */
    public function setVerified($verified)
    {
        $allowedValues = $this->getVerifiedAllowableValues();
        if (!is_null($verified) && !in_array($verified, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'verified', must be one of '%s'",
                    $verified,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($verified)) {
            throw new InvalidArgumentException('non-nullable verified cannot be null');
        }

        $this->container['verified'] = $verified;

        return $this;
    }

    /**
     * Gets trending
     *
     * @return int|null
     */
    public function getTrending()
    {
        return $this->container['trending'];
    }

    /**
     * Sets trending
     *
     * @param int|null $trending Information whether the user has a "fire\" pictogram.
     *
     * @return self
     */
    public function setTrending($trending)
    {
        $allowedValues = $this->getTrendingAllowableValues();
        if (!is_null($trending) && !in_array($trending, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'trending', must be one of '%s'",
                    $trending,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($trending)) {
            throw new InvalidArgumentException('non-nullable trending cannot be null');
        }

        $this->container['trending'] = $trending;

        return $this;
    }

    /**
     * Gets friend_status
     *
     * @return OpenAPI\Client\Model\FriendsFriendStatusStatus|null
     */
    public function getFriendStatus()
    {
        return $this->container['friend_status'];
    }

    /**
     * Sets friend_status
     *
     * @param OpenAPI\Client\Model\FriendsFriendStatusStatus|null $friend_status friend_status
     *
     * @return self
     */
    public function setFriendStatus($friend_status)
    {

        if (is_null($friend_status)) {
            throw new InvalidArgumentException('non-nullable friend_status cannot be null');
        }

        $this->container['friend_status'] = $friend_status;

        return $this;
    }

    /**
     * Gets mutual
     *
     * @return OpenAPI\Client\Model\FriendsRequestsMutual|null
     */
    public function getMutual()
    {
        return $this->container['mutual'];
    }

    /**
     * Sets mutual
     *
     * @param OpenAPI\Client\Model\FriendsRequestsMutual|null $mutual mutual
     *
     * @return self
     */
    public function setMutual($mutual)
    {

        if (is_null($mutual)) {
            throw new InvalidArgumentException('non-nullable mutual cannot be null');
        }

        $this->container['mutual'] = $mutual;

        return $this;
    }

    /**
     * Gets type
     *
     * @return OpenAPI\Client\Model\UsersUserType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param OpenAPI\Client\Model\UsersUserType|null $type type
     *
     * @return self
     */
    public function setType($type)
    {

        if (is_null($type)) {
            throw new InvalidArgumentException('non-nullable type cannot be null');
        }

        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets invited_by
     *
     * @return int|null
     */
    public function getInvitedBy()
    {
        return $this->container['invited_by'];
    }

    /**
     * Sets invited_by
     *
     * @param int|null $invited_by ID of the inviter
     *
     * @return self
     */
    public function setInvitedBy($invited_by)
    {

        if (is_null($invited_by)) {
            throw new InvalidArgumentException('non-nullable invited_by cannot be null');
        }

        $this->container['invited_by'] = $invited_by;

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


