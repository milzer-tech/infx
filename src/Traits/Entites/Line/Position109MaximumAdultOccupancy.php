<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;

trait Position109MaximumAdultOccupancy
{
    /**
     * The maximum number of adult occupancy.
     */
    #[Field(position: 109, length: 1, validationRules: ['int', 'min:0', 'max:9'])]
    #[Phoenix(position: 582, length: 1, validationRules: ['int', 'min:0', 'max:9'])]
    protected int $maximumAdultOccupancy;

    /**
     * Get the maximum number of adult occupancy
     */
    public function getMaximumAdultOccupancy(): int
    {
        return $this->maximumAdultOccupancy;
    }

    /**
     * Set the maximum number of adult occupancy
     */
    public function setMaximumAdultOccupancy(int $count): static
    {
        $this->maximumAdultOccupancy = $count;

        return $this;
    }
}
