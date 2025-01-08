<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasMinimumAdultOccupancy
{
    /**
     * The minimum number of adult occupancy.
     */
    #[Field(
        position: 29,
        length: 1,
        validationRules: 'int|min:1|max:9'
    )]
    protected int $minimumAdultOccupancy;

    /**
     * Get the minimum number of adult occupancy
     */
    public function getMinimumAdultOccupancy(): int
    {
        return $this->minimumAdultOccupancy;
    }

    /**
     * Set the minimum number of adult occupancy
     *
     * @throws ReflectionException
     */
    public function setMinimumAdultOccupancy(int $count): static
    {
        $this->validate(
            property: 'minimumAdultOccupancy',
            value: $count,
        );

        $this->minimumAdultOccupancy = $count;

        return $this;
    }
}
