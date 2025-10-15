<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;

trait Position96OutboundFlightNumber
{
    /**
     * The outbound flight number.
     */
    #[Field(position: 96, length: 4, validationRules: ['string', 'min:0', 'max:4'])]
    // I increased the length to 8 to match the Phoenix field length, the documentation says 7
    #[Phoenix(position: 203, length: 8, validationRules: ['string', 'min:0', 'max:8'])]
    protected string $outboundFlightNumber;

    /**
     * Get the outbound flight number of the Line.
     */
    public function getOutboundFlightNumber(): string
    {
        return $this->outboundFlightNumber;
    }

    /**
     * Set the outbound flight number of the Line.
     */
    public function setOutboundFlightNumber(string $OutboundFlightNumber): static
    {
        $this->outboundFlightNumber = $OutboundFlightNumber;

        return $this;
    }
}
