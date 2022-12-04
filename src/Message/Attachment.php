<?php
declare(strict_types=1);

namespace VkApi\Message;

use Exception;

class Attachment
{
    public readonly string $type;
    public readonly int $ownerId;
    public readonly int $mediaId;
    public readonly ?string $accessKey;

    public function __construct(
        string $type,
        int $ownerId,
        int $mediaId,
        ?int $accessKey = null
    ) {
        $this->type = $type;
        $this->ownerId = $ownerId;
        $this->mediaId = $mediaId;
        $this->accessKey = $accessKey;
    }

    /**
     * @throws Exception
     */
    public function __toString(): string
    {
        if (
            !$this->type
            || !$this->ownerId
            || !$this->mediaId
            || (isset($this->accessKey) && empty($this->accessKey))
        ) {
            throw new Exception('some value is empty');
        }
        $str = $this->type . $this->ownerId . '_' . $this->mediaId;
        $str .= isset($this->accessKey) ? '_'.$this->accessKey : '';
        return $str;
    }
}