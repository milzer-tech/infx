<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasFreeHotelPlaces
{
    /**
     * The free hotel places of the line.
     */
    #[Field(
        position: 75,
        length: 3,
        validationRules: 'required|int|min:1|max:999',
        required: true,
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
     *
     * @throws ReflectionException
     */
    public function setFreeHotelPlaces(int $count): static
    {
        $this->validate(
            property: 'freeHotelPlaces',
            value: $count,
        );

        $this->freeHotelPlaces = $count;

        return $this;
    }
}
