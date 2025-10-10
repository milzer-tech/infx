<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait Position107MaximumOccupancy
{
    /**
     * The maximum number of occupancy.
     */
    #[Field(
        position: 107,
        length: 1,
        validationRules: ['int', 'min:1', 'max:9']
    )]
    protected int $maximumOccupancy;

    /**
     * Get the maximum occupancy of the Line.
     */
    public function getMaximumOccupancy(): int
    {
        return $this->maximumOccupancy;
    }

    /**
     * Set the maximum occupancy of the Line.
     */
    public function setMaximumOccupancy(int $count): static
    {
        $this->maximumOccupancy = $count;

        return $this;
    }
}
