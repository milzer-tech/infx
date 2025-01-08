<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasTomaSecondRequirement
{
    /**
     * The second TOMA requirement of the line.
     */
    #[Field(
        position: 57,
        length: 3,
        validationRules: 'required|string|min:1|max:3',
    )]
    protected string $tomaSecondRequirement;

    /**
     * Get the second TOMA requirement of the line.
     */
    public function getTomaSecondRequirement(): string
    {
        return $this->tomaSecondRequirement;
    }

    /**
     * Set the second TOMA requirement of the line.
     *
     * @throws ReflectionException
     */
    public function setTomaSecondRequirement(string $value): static
    {
        $this->validate(
            property: 'tomaSecondRequirement',
            value: $value,
        );

        $this->tomaSecondRequirement = $value;

        return $this;
    }
}
