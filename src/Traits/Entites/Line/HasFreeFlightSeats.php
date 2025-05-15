<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasFreeFlightSeats
{
    /**
     * The free flight seats of the line.
     */
    #[Field(
        position: 74,
        length: 3,
        validationRules: ['int', 'min:1', 'max:999']
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
     */
    public function setFreeFlightSeats(int $count): static
    {
        $this->freeFlightSeats = $count;

        return $this;
    }
}
