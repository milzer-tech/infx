<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasDepartureOutboundTime
{
    /**
     * The departure airport outbound.
     */
    #[Field(
        position: 17,
        length: 4,
        validationRules: ['regex:/^(?:[01][0-9]|2[0-3])[0-5][0-9]$|^(?:[01][0-9]|2[0-3]):[0-5][0-9]$/']
    )]
    protected string $departureOutboundTime;

    /**
     * Get the departure outbound time of the Line.
     */
    public function getDepartureOutboundTime(): string
    {
        return $this->departureOutboundTime;
    }

    /**
     * Set the departure outbound time of the Line.
     *
     * @throws ReflectionException
     */
    public function setDepartureOutboundTime(string $departureOutboundTime): static
    {
        $this->validate(
            property: 'departureOutboundTime',
            value: $departureOutboundTime,
        );

        $this->departureOutboundTime = $this->correctTime($departureOutboundTime);

        return $this;
    }
}
