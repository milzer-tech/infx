<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasReturnFlightNumber
{
    /**
     * The return flight number.
     */
    #[Field(
        position: 24,
        length: 4,
        validationRules: 'string|min:1|max:4'
    )]
    protected string $returnFlightNumber;

    /**
     * Get the return flight number of the Line.
     */
    public function getReturnFlightNumber(): string
    {
        return $this->returnFlightNumber;
    }

    /**
     * Set the return flight number of the Line.
     *
     * @throws ReflectionException
     */
    public function setReturnFlightNumber(string $returnFlightNumber): static
    {
        $this->validate(
            property: 'returnFlightNumber',
            value: $returnFlightNumber,
        );

        $this->returnFlightNumber = $returnFlightNumber;

        return $this;
    }
}
