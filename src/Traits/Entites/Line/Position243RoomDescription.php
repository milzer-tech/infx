<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;

trait Position243RoomDescription
{
    /**
     * The room description.
     */
    #[Field(position: 243, length: 25, validationRules: ['string', 'min:0', 'max:25'])]
    #[Phoenix(position: 75, length: 40, validationRules: ['string', 'min:0', 'max:40'])]
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
