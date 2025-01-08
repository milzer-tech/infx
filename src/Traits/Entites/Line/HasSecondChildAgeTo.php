<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasSecondChildAgeTo
{
    /**
     * The second child age to.
     */
    #[Field(
        position: 39,
        length: 2,
        validationRules: 'required|integer|min:0|max:17',
    )]
    protected int $secondChildAgeTo;

    /**
     * Get the second child age to.
     */
    public function getSecondChildAgeTo(): int
    {
        return $this->secondChildAgeTo;
    }

    /**
     * Set the second child age to.
     *
     * @throws ReflectionException
     */
    public function setSecondChildAgeTo(int $age): static
    {
        $this->validate(
            property: 'secondChildAgeTo',
            value: $age,
        );

        $this->secondChildAgeTo = $age;

        return $this;
    }
}
