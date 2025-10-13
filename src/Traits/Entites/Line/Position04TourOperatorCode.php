<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;

trait Position04TourOperatorCode
{
    /**
     * The tour operator code.
     */
    #[Field(position: 4, length: 5, validationRules: ['string', 'min:0', 'max:5'])]
    #[Phoenix(position: 3, length: 4, validationRules: ['string', 'min:0', 'max:4'])]
    protected string $tourOperatorCode;

    /**
     * Get the tour operator code of the Line.
     */
    public function getTourOperatorCode(): string
    {
        return $this->tourOperatorCode;
    }

    /**
     * Set the tour operator code of the Line.
     */
    public function setTourOperatorCode(string $tourOperatorCode): static
    {
        $this->tourOperatorCode = $tourOperatorCode;

        return $this;
    }
}
