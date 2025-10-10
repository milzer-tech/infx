<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait Position243RoomDescription
{
    /**
     * The room description.
     */
    #[Field(
        position: 243,
        length: 25,
        validationRules: ['string', 'min:1', 'max:25']
    )]
    protected string $roomDescription;

    /**
     * Get the room description.
     */
    public function getRoomDescription(): string
    {
        return $this->roomDescription;
    }

    /**
     * Set the room short code.
     */
    public function setRoomDescription(string $text): static
    {
        $this->roomDescription = $text;

        return $this;
    }
}
