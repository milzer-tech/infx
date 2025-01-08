<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasMaximumOccupancy
{
    /**
     * The maximum number of occupancy.
     */
    #[Field(
        position: 28,
        length: 1,
        validationRules: 'int|min:1|max:9'
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
     *
     * @throws ReflectionException
     */
    public function setMaximumOccupancy(int $count): static
    {
        $this->validate(
            property: 'maximumOccupancy',
            value: $count,
        );

        $this->maximumOccupancy = $count;

        return $this;
    }
}
