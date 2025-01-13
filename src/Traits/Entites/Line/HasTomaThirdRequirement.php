<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasTomaThirdRequirement
{
    /**
     * The third TOMA requirement of the line.
     */
    #[Field(
        position: 58,
        length: 3,
        validationRules: ['string', 'min:1', 'max:3']
    )]
    protected string $tomaThirdRequirement;

    /**
     * Get the third TOMA requirement of the line.
     */
    public function getTomaThirdRequirement(): string
    {
        return $this->tomaThirdRequirement;
    }

    /**
     * Set the third TOMA requirement of the line.
     */
    public function setTomaThirdRequirement(string $value): static
    {
        $this->tomaThirdRequirement = $value;

        return $this;
    }
}
