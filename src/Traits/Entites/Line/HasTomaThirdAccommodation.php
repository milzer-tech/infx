<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasTomaThirdAccommodation
{
    /**
     * The third TOMA performance of the line.
     */
    #[Field(
        position: 66,
        length: 6,
        validationRules: ['string', 'min:1', 'max:6']
    )]
    protected string $tomaThirdAccommodation;

    /**
     * Get the third TOMA accommodation of the line.
     */
    public function getTomaThirdAccommodation(): string
    {
        return $this->tomaThirdAccommodation;
    }

    /**
     * Set the third TOMA accommodation of the line.
     */
    public function setTomaThirdAccommodation(string $value): static
    {
        $this->tomaThirdAccommodation = $value;

        return $this;
    }
}
