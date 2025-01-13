<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasFirstChildAgeTo
{
    /**
     * The first child age To.
     */
    #[Field(
        position: 36,
        length: 2,
        validationRules: ['integer', 'min:0', 'max:17']
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
     */
    public function setFirstChildAgeTo(int $age): static
    {
        $this->firstChildAgeTo = $age;

        return $this;
    }
}
