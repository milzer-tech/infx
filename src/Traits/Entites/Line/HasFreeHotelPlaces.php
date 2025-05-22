<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasFreeHotelPlaces
{
    /**
     * The free hotel places of the line.
     */
    #[Field(
        position: 75,
        length: 3,
        validationRules: ['int', 'min:1', 'max:999']
    )]
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
