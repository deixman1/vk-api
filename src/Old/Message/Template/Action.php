<?php

namespace VkApi\Old\Message\Template;

class Action
{
    /**
     * type
     */
    public readonly string $type;
    /**
     * link
     */
    public readonly ?string $link;

    /**
     * @param string $type
     * @param string|null $link
     */
    public function __construct(
        string $type,
        ?string $link = null
    )
    {
        $this->type = $type;
        $this->link = $link;
    }

}