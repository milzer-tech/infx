<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasDepartureAirportReturn
{
    /**
     * The departure airport return.
     */
    #[Field(
        position: 11,
        length: 3,
        validationRules: 'string|min:1|max:3'
    )]
    protected string $departureAirportReturn;

    /**
     * Get the departure airport return of the Line.
     */
    public function getDepartureAirportReturn(): string
    {
        return $this->departureAirportReturn;
    }

    /**
     * Set the departure airport return of the Line.
     *
     * @throws ReflectionException
     */
    public function setDepartureAirportReturn(string $departureAirportReturn): static
    {
        $this->validate(
            property: 'departureAirportReturn',
            value: $departureAirportReturn,
        );

        $this->departureAirportReturn = $departureAirportReturn;

        return $this;
    }
}
