<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasDepartureAirportOutbound
{
    /**
     * The departure airport outbound.
     */
    #[Field(
        position: 9,
        length: 3,
        validationRules: 'required|string|min:1|max:3',
        required: true
    )]
    protected string $departureAirportOutbound;

    /**
     * Get the departure airport of the Line.
     */
    public function getDepartureAirportOutbound(): string
    {
        return $this->departureAirportOutbound;
    }

    /**
     * Set the departure airport of the Line.
     *
     * @throws ReflectionException
     */
    public function setDepartureAirportOutbound(string $departureAirportOutbound): static
    {
        $this->validate(
            property: 'departureAirportOutbound',
            value: $departureAirportOutbound,
        );

        $this->departureAirportOutbound = $departureAirportOutbound;

        return $this;
    }
}
