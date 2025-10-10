<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait Position149FirstChildAgeFrom
{
    /**
     * The first child age from.
     */
    #[Field(
        position: 149,
        length: 2,
        validationRules: ['integer', 'min:0', 'max:17']
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
     */
    public function setFirstChildAgeFrom(int $age): static
    {
        $this->firstChildAgeFrom = $age;

        return $this;
    }
}
