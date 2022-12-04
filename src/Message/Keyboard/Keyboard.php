<?php
declare(strict_types=1);

namespace VkApi\Keyboard;

use VkApi\Keyboard\Buttons\Button;

class Keyboard
{
    private bool $oneTime = false;
    private array $buttons;
    private bool $inline = false;

    /**
     * @param bool $oneTime
     */
    public function setOneTime(bool $oneTime): void
    {
        $this->oneTime = $oneTime;
    }

    /**
     * @param Button[] $buttons
     */
    public function setButtons(array $buttons): void
    {
        $this->buttons = $buttons;
    }

    /**
     * @param bool $inline
     */
    public function setInline(bool $inline): void
    {
        $this->inline = $inline;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'one_time' => $this->oneTime,
            'buttons' => $this->buttons,
            'inline' => $this->inline,
        ];
    }
}
