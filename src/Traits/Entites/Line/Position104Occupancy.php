<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;

trait Position104Occupancy
{
    /**
     * The occupancy.
     */
    #[Field(position: 104, length: 1, validationRules: ['int', 'min:0', 'max:9'])]
    #[Phoenix(position: 67, length: 1, validationRules: ['int', 'min:0', 'max:9'])]
    protected int $occupancy;

    /**
     * Get the occupancy of the Line.
     */
    public function getOccupancy(): int
    {
        return $this->occupancy;
    }

    /**
     * Set the occupancy of the Line.
     */
    public function setOccupancy(int $count): static
    {
        $this->occupancy = $count;

        return $this;
    }
}
