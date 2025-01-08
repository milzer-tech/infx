<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasArrivalOutboundTim
{
    /**
     * The airline outbound time.
     */
    #[Field(
        position: 19,
        length: 4,
        validationRules: ['regex:/^(?:[01][0-9]|2[0-3])[0-5][0-9]$|^(?:[01][0-9]|2[0-3]):[0-5][0-9]$/']
    )]
    protected string $arrivalOutboundTime;

    /**
     * Get the arrival outbound time of the Line.
     */
    public function getArrivalOutboundTime(): string
    {
        return $this->arrivalOutboundTime;
    }

    /**
     * Set the arrival outbound time of the Line.
     *
     * @throws ReflectionException
     */
    public function setArrivalOutboundTime(string $arrivalOutboundTime): static
    {
        $this->validate(
            property: 'arrivalOutboundTime',
            value: $arrivalOutboundTime,
        );

        $this->arrivalOutboundTime = $this->correctTime($arrivalOutboundTime);

        return $this;
    }
}
