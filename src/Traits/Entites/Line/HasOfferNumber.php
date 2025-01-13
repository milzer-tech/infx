<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasOfferNumber
{
    /**
     * The offer number.
     */
    #[Field(
        position: 5,
        length: 10,
        validationRules: ['required', 'string', 'min:1', 'max:5']
    )]
    protected string $offerNumber;

    /**
     * Get the offer number of the Line.
     */
    public function getOfferNumber(): string
    {
        return $this->offerNumber;
    }

    /**
     * Set the offer number of the Line.
     */
    public function setOfferNumber(string $offerNumber): static
    {
        $this->offerNumber = $offerNumber;

        return $this;
    }
}
