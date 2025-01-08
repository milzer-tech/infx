<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasCurrency
{
    /**
     * The currency of the line.
     */
    #[Field(
        position: 31,
        length: 3,
        validationRules: 'required|string|max:3',
        required: true,
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
     *
     * @throws ReflectionException
     */
    public function setCurrency(string $currency): static
    {
        $this->validate(
            property: 'currency',
            value: $currency,
        );

        $this->currency = $currency;

        return $this;
    }
}
