<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasOfferNumber
{
    /**
     * The offer number.
     */
    #[Field(
        position: 5,
        length: 10,
        validationRules: 'required|string|min:1|max:5',
        required: true
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
     *
     * @throws ReflectionException
     */
    public function setOfferNumber(string $offerNumber): static
    {
        $this->validate(
            property: 'offerNumber',
            value: $offerNumber,
        );

        $this->offerNumber = $offerNumber;

        return $this;
    }
}
