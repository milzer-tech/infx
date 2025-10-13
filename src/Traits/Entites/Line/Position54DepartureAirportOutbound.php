<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;

trait Position54DepartureAirportOutbound
{
    /**
     * The departure airport outbound.
     */
    #[Field(position: 54, length: 3, validationRules: ['string', 'min:0', 'max:3'])]
    #[Phoenix(position: 7, length: 3, validationRules: ['string', 'min:0', 'max:3'])]
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
     */
    public function setDepartureAirportOutbound(string $departureAirportOutbound): static
    {
        $this->departureAirportOutbound = $departureAirportOutbound;

        return $this;
    }
}
