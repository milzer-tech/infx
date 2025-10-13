<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;

trait Position60DepartureAirportReturn
{
    /**
     * The departure airport return.
     */
    #[Field(position: 60, length: 3, validationRules: ['string', 'min:0', 'max:3'])]
    #[Phoenix(position: 13, length: 3, validationRules: ['string', 'min:0', 'max:3'])]
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
