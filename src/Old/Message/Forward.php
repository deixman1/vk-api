<?php
declare(strict_types=1);

namespace VkApi\Old\Message;

class Forward
{
    /**
     * owner_id
     * владелец сообщений. Стоит передавать, если вы хотите переслать сообщения из сообщества в диалог;
     */
    public readonly int $ownerId;
    /**
     * peer_id
     * идентификатор места, из которого необходимо переслать сообщения;
     */
    public readonly int $peerId;
    /**
     * conversation_message_ids
     * массив conversation_message_id сообщений, которые необходимо переслать.
     * В массив conversation_message_ids можно передать сообщения:
     * •находящиеся в личном диалоге с ботом;
     * •являющиеся исходящими сообщениями бота;
     * •написанными после того, как бот вступил в беседу и появился доступ к сообщениям.
     */
    public readonly array $conversationMessageIds;
    /**
     * message_ids
     * массив id сообщений;
     */
    public readonly array $messageIds;
    /**
     * is_reply
     * ответ на сообщения.
     * Стоит передавать, если вы хотите ответить на сообщения в том чате, в котором находятся сообщения.
     * При этом в conversation_message_ids или message_ids должен находиться только один элемент.
     */
    public readonly bool $isReply;

    public function __construct(
        int $ownerId,
        int $peerId,
        array $conversationMessageIds,
        array $messageIds,
        bool $isReply
    )
    {
        $this->ownerId = $ownerId;
        $this->peerId = $peerId;
        $this->conversationMessageIds = $conversationMessageIds;
        $this->messageIds = $messageIds;
        $this->isReply = $isReply;
    }

    public function toArray(): array
    {
        return [
            'owner_id' => $this->ownerId,
            'peer_id' => $this->peerId,
            'conversation_message_ids' => $this->conversationMessageIds,
            'message_ids' => $this->messageIds,
            'is_reply' => $this->isReply,
        ];
    }
}