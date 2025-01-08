<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasOutboundFlightNumber
{
    /**
     * The outbound flight number.
     */
    #[Field(
        position: 23,
        length: 4,
        validationRules: 'string|min:1|max:4'
    )]
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
     *
     * @throws ReflectionException
     */
    public function setOutboundFlightNumber(string $OutboundFlightNumber): static
    {
        $this->validate(
            property: 'outboundFlightNumber',
            value: $OutboundFlightNumber,
        );

        $this->outboundFlightNumber = $OutboundFlightNumber;

        return $this;
    }
}
