<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;

trait Position63ArrivalAirportReturn
{
    /**
     * The arrival airport return.
     */
    #[Field(position: 63, length: 3, validationRules: ['string', 'min:0', 'max:3'])]
    #[Phoenix(position: 16, length: 3, validationRules: ['string', 'min:0', 'max:3'])]
    protected string $arrivalAirportReturn;

    /**
     * Get the arrival airport return of the Line.
     */
    public function getArrivalAirportReturn(): string
    {
        return $this->arrivalAirportReturn;
    }

    /**
     * Set the arrival airport return of the Line.
     */
    public function setArrivalAirportReturn(string $arrivalAirportReturn): static
    {
        $this->arrivalAirportReturn = $arrivalAirportReturn;

        return $this;
    }
}
