<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;

trait Position78DepartureOutboundTime
{
    /**
     * The departure airport outbound.
     */
    #[Field(
        position: 78,
        length: 4,
        validationRules: ['regex:/^(?:[01][0-9]|2[0-3])[0-5][0-9]$|^(?:[01][0-9]|2[0-3]):[0-5][0-9]$/']
    )]
    #[Phoenix(
        position: 211,
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
     */
    public function setDepartureOutboundTime(string $departureOutboundTime): static
    {
        $this->departureOutboundTime = $this->correctTime($departureOutboundTime);

        return $this;
    }
}
