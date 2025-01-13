<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasRoomShortCode
{
    /**
     * The room short code.
     */
    #[Field(
        position: 47,
        length: 2,
        validationRules: ['string', 'min:1', 'max:2']
    )]
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
