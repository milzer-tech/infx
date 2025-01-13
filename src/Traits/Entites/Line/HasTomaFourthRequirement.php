<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasTomaFourthRequirement
{
    /**
     * The fourth TOMA requirement of the line.
     */
    #[Field(
        position: 59,
        length: 3,
        validationRules: ['string', 'min:1', 'max:3']
    )]
    protected string $tomaFourthRequirement;

    /**
     * Get the fourth TOMA requirement of the line.
     */
    public function getTomaFourthRequirement(): string
    {
        return $this->tomaFourthRequirement;
    }

    /**
     * Set the fourth TOMA requirement of the line.
     */
    public function setTomaFourthRequirement(string $value): static
    {
        $this->tomaFourthRequirement = $value;

        return $this;
    }
}
