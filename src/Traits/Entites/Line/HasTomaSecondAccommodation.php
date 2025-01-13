<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasTomaSecondAccommodation
{
    /**
     * The second TOMA performance of the line.
     */
    #[Field(
        position: 65,
        length: 6,
        validationRules: ['string', 'min:1', 'max:6']
    )]
    protected string $tomaSecondAccommodation;

    /**
     * Get the second TOMA accommodation of the line.
     */
    public function getTomaSecondAccommodation(): string
    {
        return $this->tomaSecondAccommodation;
    }

    /**
     * Set the second TOMA accommodation of the line.
     */
    public function setTomaSecondAccommodation(string $value): static
    {
        $this->tomaSecondAccommodation = $value;

        return $this;
    }
}
