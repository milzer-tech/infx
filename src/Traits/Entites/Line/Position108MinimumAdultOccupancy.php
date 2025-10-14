<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;

trait Position108MinimumAdultOccupancy
{
    /**
     * The minimum number of adult occupancy.
     */
    #[Field(position: 108, length: 1, validationRules: ['int', 'min:0', 'max:9'])]
    #[Phoenix(position: 581, length: 1, validationRules: ['int', 'min:0', 'max:9'])]
    protected int $minimumAdultOccupancy;

    /**
     * Get the minimum number of adult occupancy
     */
    public function getMinimumAdultOccupancy(): int
    {
        return $this->minimumAdultOccupancy;
    }

    /**
     * Set the minimum number of adult occupancy.
     */
    public function setMinimumAdultOccupancy(int $count): static
    {
        $this->minimumAdultOccupancy = $count;

        return $this;
    }
}
