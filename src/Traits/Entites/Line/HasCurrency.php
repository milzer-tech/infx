<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasCurrency
{
    /**
     * The currency of the line.
     */
    #[Field(
        position: 31,
        length: 3,
        validationRules: ['required', 'string', 'max:3'],
    )]
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
