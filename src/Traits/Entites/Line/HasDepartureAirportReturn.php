<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasDepartureAirportReturn
{
    /**
     * The departure airport return.
     */
    #[Field(
        position: 11,
        length: 3,
        validationRules: ['string', 'min:1', 'max:3']
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
     */
    public function setDepartureAirportReturn(string $departureAirportReturn): static
    {
        $this->departureAirportReturn = $departureAirportReturn;

        return $this;
    }
}
