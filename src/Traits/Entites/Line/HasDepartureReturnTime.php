<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasDepartureReturnTime
{
    /**
     * The departure return time.
     */
    #[Field(
        position: 20,
        length: 4,
        validationRules: ['regex:/^(?:[01][0-9]|2[0-3])[0-5][0-9]$|^(?:[01][0-9]|2[0-3]):[0-5][0-9]$/']
    )]
    protected string $departureReturnTime;

    /**
     * Get the departure return time of the Line.
     */
    public function getDepartureReturnTime(): string
    {
        return $this->departureReturnTime;
    }

    /**
     * Set the departure return time of the Line.
     *
     * @throws ReflectionException
     */
    public function setDepartureReturnTime(string $departureReturnTime): static
    {
        $this->validate(
            property: 'departureReturnTime',
            value: $departureReturnTime,
        );

        $this->departureReturnTime = $this->correctTime($departureReturnTime);

        return $this;
    }
}
