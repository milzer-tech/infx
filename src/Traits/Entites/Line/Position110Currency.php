<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;

trait Position110Currency
{
    /**
     * The currency of the line.
     */
    #[Field(position: 110, length: 3, validationRules: ['string', 'max:3'])]
    #[Phoenix(position: 583, length: 3, validationRules: ['string', 'max:3'])]
    protected string $currency;

    /**
     * Get the currency of the line.
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Set the currency of the line.
     */
    public function setCurrency(string $currency): static
    {
        $this->currency = $currency;

        return $this;
    }
}
