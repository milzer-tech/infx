<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasArrivalAirportOutbound
{
    /**
     * The arrival airport outbound.
     */
    #[Field(
        position: 10,
        length: 3,
        validationRules: 'required|string|min:1|max:3',
        required: true
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
     *
     * @throws ReflectionException
     */
    public function setArrivalAirportOutbound(string $arrivalAirportOutbound): static
    {
        $this->validate(
            property: 'arrivalAirportOutbound',
            value: $arrivalAirportOutbound,
        );

        $this->arrivalAirportOutbound = $arrivalAirportOutbound;

        return $this;
    }
}
