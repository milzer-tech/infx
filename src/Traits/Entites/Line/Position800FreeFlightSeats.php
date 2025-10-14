<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;

trait Position800FreeFlightSeats
{
    /**
     * The free flight seats of the line.
     */
    #[Field(position: 800, length: 3, validationRules: ['int', 'min:0', 'max:999'])]
    #[Phoenix(position: 442, length: 3, validationRules: ['int', 'min:0', 'max:999'])]
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
