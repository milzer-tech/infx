<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasArrivalAirportReturn
{
    /**
     * The arrival airport return.
     */
    #[Field(
        position: 12,
        length: 3,
        validationRules: 'string|min:1|max:3'
    )]
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
     *
     * @throws ReflectionException
     */
    public function setArrivalAirportReturn(string $arrivalAirportReturn): static
    {
        $this->validate(
            property: 'arrivalAirportReturn',
            value: $arrivalAirportReturn,
        );

        $this->arrivalAirportReturn = $arrivalAirportReturn;

        return $this;
    }
}
