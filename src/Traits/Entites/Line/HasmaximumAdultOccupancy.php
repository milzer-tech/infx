<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasmaximumAdultOccupancy
{
    /**
     * The maximum number of adult occupancy.
     */
    #[Field(
        position: 30,
        length: 1,
        validationRules: ['int', 'min:1', 'max:9']
    )]
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
