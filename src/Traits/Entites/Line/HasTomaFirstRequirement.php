<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasTomaFirstRequirement
{
    /**
     * The first TOMA requirement of the line.
     */
    #[Field(
        position: 56,
        length: 3,
        validationRules: 'required|string|min:1|max:3',
        required: true,
    )]
    protected string $tomaFirstRequirement;

    /**
     * Get the first TOMA requirement of the line.
     */
    public function getTomaFirstRequirement(): string
    {
        return $this->tomaFirstRequirement;
    }

    /**
     * Set the first TOMA requirement of the line.
     *
     * @throws ReflectionException
     */
    public function setTomaFirstRequirement(string $value): static
    {
        $this->validate(
            property: 'tomaFirstRequirement',
            value: $value,
        );

        $this->tomaFirstRequirement = $value;

        return $this;
    }
}
