<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasFirstChildAgeFrom
{
    /**
     * The first child age from.
     */
    #[Field(
        position: 35,
        length: 2,
        validationRules: 'required|integer|min:0|max:17',
    )]
    protected int $firstChildAgeFrom;

    /**
     * Get the first child age from.
     */
    public function getFirstChildAgeFrom(): int
    {
        return $this->firstChildAgeFrom;
    }

    /**
     * Set the first child age from.
     *
     * @throws ReflectionException
     */
    public function setFirstChildAgeFrom(int $age): static
    {
        $this->validate(
            property: 'firstChildAgeFrom',
            value: $age,
        );

        $this->firstChildAgeFrom = $age;

        return $this;
    }
}
