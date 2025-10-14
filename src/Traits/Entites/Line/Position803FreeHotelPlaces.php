<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;

trait Position803FreeHotelPlaces
{
    /**
     * The free hotel places of the line.
     */
    #[Field(position: 803, length: 3, validationRules: ['int', 'min:0', 'max:999'])]
    #[Phoenix(position: 445, length: 3, validationRules: ['int', 'min:0', 'max:999'])]
    protected int $freeHotelPlaces;

    /**
     * Get the free hotel places of the line.
     */
    public function getFreeHotelPlaces(): int
    {
        return $this->freeHotelPlaces;
    }

    /**
     * Set the free hotel places of the line.
     */
    public function setFreeHotelPlaces(int $count): static
    {
        $this->freeHotelPlaces = $count;

        return $this;
    }
}
