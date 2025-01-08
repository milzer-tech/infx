<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasTomaFourthRequirement
{
    /**
     * The fourth TOMA requirement of the line.
     */
    #[Field(
        position: 59,
        length: 3,
        validationRules: 'required|string|min:1|max:3',
    )]
    protected string $tomaFourthRequirement;

    /**
     * Get the fourth TOMA requirement of the line.
     */
    public function getTomaFourthRequirement(): string
    {
        return $this->tomaFourthRequirement;
    }

    /**
     * Set the fourth TOMA requirement of the line.
     *
     * @throws ReflectionException
     */
    public function setTomaFourthRequirement(string $value): static
    {
        $this->validate(
            property: 'tomaFourthRequirement',
            value: $value,
        );

        $this->tomaFourthRequirement = $value;

        return $this;
    }
}
