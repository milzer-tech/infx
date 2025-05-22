<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasOutboundFlightIdentification
{
    /**
     * The outbound flight identification.
     */
    #[Field(
        position: 15,
        length: 3,
        validationRules: ['string', 'min:1', 'max:3']
    )]
    protected string $outboundFlightIdentification;

    /**
     * Get the outbound flight identification of the Line.
     */
    public function getOutboundFlightIdentification(): string
    {
        return $this->outboundFlightIdentification;
    }

    /**
     * Set the outbound flight identification of the Line.
     */
    public function setOutboundFlightIdentification(string $OutboundFlightNumber): static
    {
        $this->outboundFlightIdentification = $OutboundFlightNumber;

        return $this;
    }
}
