<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasMinimumOccupancy
{
    /**
     * The minimum number of occupancy.
     */
    #[Field(
        position: 27,
        length: 1,
        validationRules: 'int|min:1|max:9'
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
     *
     * @throws ReflectionException
     */
    public function setMinimumOccupancy(int $count): static
    {
        $this->validate(
            property: 'minimumOccupancy',
            value: $count,
        );

        $this->minimumOccupancy = $count;

        return $this;
    }
}
