<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasTomaSecondRequirement
{
    /**
     * The second TOMA requirement of the line.
     */
    #[Field(
        position: 57,
        length: 3,
        validationRules: ['string', 'min:1', 'max:3']
    )]
    protected string $tomaSecondRequirement;

    /**
     * Get the second TOMA requirement of the line.
     */
    public function getTomaSecondRequirement(): string
    {
        return $this->tomaSecondRequirement;
    }

    /**
     * Set the second TOMA requirement of the line.
     */
    public function setTomaSecondRequirement(string $value): static
    {
        $this->tomaSecondRequirement = $value;

        return $this;
    }
}
