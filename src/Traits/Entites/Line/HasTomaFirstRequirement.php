<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasTomaFirstRequirement
{
    /**
     * The first TOMA requirement of the line.
     */
    #[Field(
        position: 56,
        length: 3,
        validationRules: ['string', 'min:1', 'max:3']
    )]
    protected string $tomaFirstRequirement;

    /**
     * Get the first TOMA requirement of the line.
     */
    public function getTomaFirstRequirement(): string
    {
        return $this->tomaFirstRequirement;
    }

    /**
     * Set the first TOMA requirement of the line.
     */
    public function setTomaFirstRequirement(string $value): static
    {
        $this->tomaFirstRequirement = $value;

        return $this;
    }
}
