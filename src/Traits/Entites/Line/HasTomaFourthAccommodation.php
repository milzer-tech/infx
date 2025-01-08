<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasTomaFourthAccommodation
{
    /**
     * The fourth TOMA performance of the line.
     */
    #[Field(
        position: 67,
        length: 6,
        validationRules: 'required|string|min:1|max:6',
    )]
    protected string $tomaFourthAccommodation;

    /**
     * Get the fourth TOMA accommodation of the line.
     */
    public function getTomaFourthAccommodation(): string
    {
        return $this->tomaFourthAccommodation;
    }

    /**
     * Set the fourth TOMA accommodation of the line.
     *
     * @throws ReflectionException
     */
    public function setTomaFourthAccommodation(string $value): static
    {
        $this->validate(
            property: 'tomaFourthAccommodation',
            value: $value,
        );

        $this->tomaFourthAccommodation = $value;

        return $this;
    }
}
