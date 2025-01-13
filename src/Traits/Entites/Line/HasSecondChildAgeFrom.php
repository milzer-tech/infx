<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasSecondChildAgeFrom
{
    /**
     * The second child age from.
     */
    #[Field(
        position: 38,
        length: 2,
        validationRules: ['integer', 'min:0', 'max:17']
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
     */
    public function setSecondChildAgeFrom(int $age): static
    {
        $this->secondChildAgeFrom = $age;

        return $this;
    }
}
