<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;

trait Position241RoomShortCode
{
    /**
     * The room short code.
     */
    #[Field(position: 241, length: 2, validationRules: ['string', 'min:0', 'max:2'])]
    #[Phoenix(position: 61, length: 3, validationRules: ['string', 'min:0', 'max:3'])]
    protected string $roomShortCode;

    /**
     * Get the room short code.
     */
    public function getRoomShortCode(): string
    {
        return $this->roomShortCode;
    }

    /**
     * Set the room short code.
     */
    public function setRoomShortCode(string $code): static
    {
        $this->roomShortCode = $code;

        return $this;
    }
}
