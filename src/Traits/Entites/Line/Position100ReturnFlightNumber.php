<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;

trait Position100ReturnFlightNumber
{
    /**
     * The return flight number.
     */
    #[Field(position: 100, length: 4, validationRules: ['string', 'min:0', 'max:4'])]
    // I increased the length to 8 to match the Phoenix field length, the documentation says 7
    #[Phoenix(position: 227, length: 8, validationRules: ['string', 'min:0', 'max:8'])]
    protected string $returnFlightNumber;

    /**
     * Get the return flight number of the Line.
     */
    public function getReturnFlightNumber(): string
    {
        return $this->returnFlightNumber;
    }

    /**
     * Set the return flight number of the Line.
     */
    public function setReturnFlightNumber(string $returnFlightNumber): static
    {
        $this->returnFlightNumber = $returnFlightNumber;

        return $this;
    }
}
