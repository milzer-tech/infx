<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasArrivalAirportOutbound
{
    /**
     * The arrival airport outbound.
     */
    #[Field(
        position: 10,
        length: 3,
        validationRules: ['required', 'string', 'min:1', 'max:3'],
    )]
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
