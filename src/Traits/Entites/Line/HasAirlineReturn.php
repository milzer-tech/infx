<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasAirlineReturn
{
    /**
     * The airline Return.
     */
    #[Field(
        position: 14,
        length: 3,
        validationRules: 'string|min:1|max:3'
    )]
    protected string $airlineReturn;

    /**
     * Get the airline return of the Line.
     */
    public function getAirlineReturn(): string
    {
        return $this->airlineReturn;
    }

    /**
     * Set the airline return of the Line.
     *
     * @throws ReflectionException
     */
    public function setAirlineReturn(string $airlineReturn): static
    {
        $this->validate(
            property: 'airlineReturn',
            value: $airlineReturn,
        );

        $this->airlineReturn = $airlineReturn;

        return $this;
    }
}
