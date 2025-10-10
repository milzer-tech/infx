<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait Position69AirlineReturn
{
    /**
     * The airline Return.
     */
    #[Field(
        position: 69,
        length: 3,
        validationRules: ['string', 'min:1', 'max:3']
    )]
    protected string $airlineReturn;

    /**
     * Get the airline return of the Line.
     */
    public function getAirlineReturn(): string
    {
        return $this->airlineReturn;
    }

    /**
     * Set the airline return of the Line.
     */
    public function setAirlineReturn(string $airlineReturn): static
    {
        $this->airlineReturn = $airlineReturn;

        return $this;
    }
}
