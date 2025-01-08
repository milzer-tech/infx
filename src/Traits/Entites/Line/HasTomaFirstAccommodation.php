<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasTomaFirstAccommodation
{
    /**
     * The first TOMA performance of the line.
     */
    #[Field(
        position: 64,
        length: 6,
        validationRules: 'required|string|min:1|max:6',
        required: true,
    )]
    protected string $tomaFirstAccommodation;

    /**
     * Get the first TOMA accommodation of the line.
     */
    public function getTomaFirstAccommodation(): string
    {
        return $this->tomaFirstAccommodation;
    }

    /**
     * Set the first TOMA accommodation of the line.
     *
     * @throws ReflectionException
     */
    public function setTomaFirstAccommodation(string $value): static
    {
        $this->validate(
            property: 'tomaFirstAccommodation',
            value: $value,
        );

        $this->tomaFirstAccommodation = $value;

        return $this;
    }
}
