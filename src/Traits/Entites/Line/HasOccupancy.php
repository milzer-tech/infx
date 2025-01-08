<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasOccupancy
{
    /**
     * The occupancy.
     */
    #[Field(
        position: 25,
        length: 1,
        validationRules: 'int|min:1|max:9'
    )]
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
     *
     * @throws ReflectionException
     */
    public function setOccupancy(int $count): static
    {
        $this->validate(
            property: 'occupancy',
            value: $count,
        );

        $this->occupancy = $count;

        return $this;
    }
}
