<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasTomaSecondAccommodation
{
    /**
     * The second TOMA performance of the line.
     */
    #[Field(
        position: 65,
        length: 6,
        validationRules: 'required|string|min:1|max:6',
    )]
    protected string $tomaSecondAccommodation;

    /**
     * Get the second TOMA accommodation of the line.
     */
    public function getTomaSecondAccommodation(): string
    {
        return $this->tomaSecondAccommodation;
    }

    /**
     * Set the second TOMA accommodation of the line.
     *
     * @throws ReflectionException
     */
    public function setTomaSecondAccommodation(string $value): static
    {
        $this->validate(
            property: 'tomaSecondAccommodation',
            value: $value,
        );

        $this->tomaSecondAccommodation = $value;

        return $this;
    }
}
