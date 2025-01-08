<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasSecondChildAgeFrom
{
    /**
     * The second child age from.
     */
    #[Field(
        position: 38,
        length: 2,
        validationRules: 'required|integer|min:0|max:17',
    )]
    protected int $secondChildAgeFrom;

    /**
     * Get the second child age from.
     */
    public function getSecondChildAgeFrom(): int
    {
        return $this->secondChildAgeFrom;
    }

    /**
     * Set the second child age from.
     *
     * @throws ReflectionException
     */
    public function setSecondChildAgeFrom(int $age): static
    {
        $this->validate(
            property: 'secondChildAgeFrom',
            value: $age,
        );

        $this->secondChildAgeFrom = $age;

        return $this;
    }
}
