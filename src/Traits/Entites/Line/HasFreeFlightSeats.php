<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasFreeFlightSeats
{
    /**
     * The free flight seats of the line.
     */
    #[Field(
        position: 74,
        length: 3,
        validationRules: 'required|int|min:1|max:999',
        required: true,
    )]
    protected int $freeFlightSeats;

    /**
     * Get the free flight seats of the line.
     */
    public function getFreeFlightSeats(): int
    {
        return $this->freeFlightSeats;
    }

    /**
     * Set the free flight seats of the line.
     *
     * @throws ReflectionException
     */
    public function setFreeFlightSeats(int $count): static
    {
        $this->validate(
            property: 'freeFlightSeats',
            value: $count,
        );

        $this->freeFlightSeats = $count;

        return $this;
    }
}
