<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasArrivalReturnTime
{
    /**
     * The arrival return time.
     */
    #[Field(
        position: 22,
        length: 4,
        validationRules: ['regex:/^(?:[01][0-9]|2[0-3])[0-5][0-9]$|^(?:[01][0-9]|2[0-3]):[0-5][0-9]$/']
    )]
    protected string $arrivalReturnTime;

    /**
     * Get arrival return time of the Line.
     */
    public function getArrivalReturnTime(): string
    {
        return $this->arrivalReturnTime;
    }

    /**
     * Set arrival return time of the Line.
     */
    public function setArrivalReturnTime(string $arrivalReturnTime): static
    {
        $this->arrivalReturnTime = $this->correctTime(time: $arrivalReturnTime);

        return $this;
    }
}
