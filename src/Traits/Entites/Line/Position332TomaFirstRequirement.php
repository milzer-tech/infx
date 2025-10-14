<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;

trait Position332TomaFirstRequirement
{
    /**
     * The first TOMA requirement of the line.
     */
    #[Field(position: 332, length: 3, validationRules: ['string', 'min:0', 'max:3'])]
    #[Phoenix(position: 73, length: 2, validationRules: ['string', 'min:0', 'max:2'])]
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
