<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasMinimumOccupancy
{
    /**
     * The minimum number of occupancy.
     */
    #[Field(
        position: 27,
        length: 1,
        validationRules: ['int', 'min:1', 'max:9']
    )]
    protected int $minimumOccupancy;

    /**
     * Get the minimum occupancy of the Line.
     */
    public function getMinimumOccupancy(): int
    {
        return $this->minimumOccupancy;
    }

    /**
     * Set the minimum occupancy of the Line.
     */
    public function setMinimumOccupancy(int $count): static
    {
        $this->minimumOccupancy = $count;

        return $this;
    }
}
