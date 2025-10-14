<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;

trait Position106MinimumOccupancy
{
    /**
     * The minimum number of occupancy.
     */
    #[Field(position: 106, length: 1, validationRules: ['int', 'min:0', 'max:9'])]
    #[Phoenix(position: 579, length: 1, validationRules: ['int', 'min:0', 'max:9'])]
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
