<?php
/**
 * MessagesTemplateActionTypeNames
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
use VkApi\Lib\ObjectSerializer;
use VkApi\Model\ModelInterface;

/**
 * MessagesTemplateActionTypeNames Class Doc Comment
 *
 * @category Class
 * @description Template action type names
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MessagesTemplateActionTypeNames
{
    /**
     * Possible values of this enum
     */
    public const TEXT = 'text';

    public const START = 'start';

    public const LOCATION = 'location';

    public const VKPAY = 'vkpay';

    public const OPEN_APP = 'open_app';

    public const OPEN_PHOTO = 'open_photo';

    public const OPEN_LINK = 'open_link';

    public const CALLBACK = 'callback';

    public const INTENT_SUBSCRIBE = 'intent_subscribe';

    public const INTENT_UNSUBSCRIBE = 'intent_unsubscribe';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TEXT,
            self::START,
            self::LOCATION,
            self::VKPAY,
            self::OPEN_APP,
            self::OPEN_PHOTO,
            self::OPEN_LINK,
            self::CALLBACK,
            self::INTENT_SUBSCRIBE,
            self::INTENT_UNSUBSCRIBE
        ];
    }
}


