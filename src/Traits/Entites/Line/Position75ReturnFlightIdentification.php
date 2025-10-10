<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait Position75ReturnFlightIdentification
{
    /**
     * The return flight identification.
     */
    #[Field(
        position: 75,
        length: 3,
        validationRules: ['string', 'min:1', 'max:3']
    )]
    protected string $returnFlightIdentification;

    /**
     * Get the return flight identification of the Line.
     */
    public function getReturnFlightIdentification(): string
    {
        return $this->returnFlightIdentification;
    }

    /**
     * Set the return flight identification of the Line.
     */
    public function setReturnFlightIdentification(string $OutboundFlightNumber): static
    {
        $this->returnFlightIdentification = $OutboundFlightNumber;

        return $this;
    }
}
