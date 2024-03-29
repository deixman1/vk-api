<?php
/**
 * MessagesConversationPeerType
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
 * MessagesConversationPeerType Class Doc Comment
 *
 * @category Class
 * @description Peer type
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MessagesConversationPeerType
{
    /**
     * Possible values of this enum
     */
    public const CHAT = 'chat';

    public const EMAIL = 'email';

    public const USER = 'user';

    public const GROUP = 'group';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CHAT,
            self::EMAIL,
            self::USER,
            self::GROUP
        ];
    }
}


