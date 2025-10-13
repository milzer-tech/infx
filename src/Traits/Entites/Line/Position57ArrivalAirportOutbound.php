<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;

trait Position57ArrivalAirportOutbound
{
    /**
     * The arrival airport outbound.
     */
    #[Field(position: 57, length: 3, validationRules: ['string', 'min:0', 'max:3'])]
    #[Phoenix(position: 10, length: 3, validationRules: ['string', 'min:0', 'max:3'])]
    protected string $arrivalAirportOutbound;

    /**
     * Get the arrival airport of the Line.
     */
    public function getArrivalAirportOutbound(): string
    {
        return $this->arrivalAirportOutbound;
    }

    /**
     * Set the arrival airport of the Line.
     */
    public function setArrivalAirportOutbound(string $arrivalAirportOutbound): static
    {
        $this->arrivalAirportOutbound = $arrivalAirportOutbound;

        return $this;
    }
}
