<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasFirstChildAgeTo
{
    /**
     * The first child age To.
     */
    #[Field(
        position: 36,
        length: 2,
        validationRules: 'required|integer|min:0|max:17',
    )]
    protected int $firstChildAgeTo;

    /**
     * Get the first child age to.
     */
    public function getFirstChildAgeTO(): int
    {
        return $this->firstChildAgeTo;
    }

    /**
     * Set the first child age to.
     *
     * @throws ReflectionException
     */
    public function setFirstChildAgeTo(int $age): static
    {
        $this->validate(
            property: 'firstChildAgeTo',
            value: $age,
        );

        $this->firstChildAgeTo = $age;

        return $this;
    }
}
