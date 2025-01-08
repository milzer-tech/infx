<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasFirstChildPrice
{
    /**
     * The first child price.
     */
    #[Field(
        position: 37,
        length: 12,
        validationRules: [
            'required',
            'regex:/^(?!0(\.0{2})?$)(\d{1,10}(\.\d{1,2})?)$/',
        ],
        validationMessages: [
            'regex' => 'The format of the price must be between 0.01 and 9999999999.99.',
        ]
    )]
    protected float $firstChildPrice;

    /**
     * Get the first child price.
     */
    public function getFirstChildPrice(): float
    {
        return $this->firstChildPrice;
    }

    /**
     * Set the first child price.
     *
     * @throws ReflectionException
     */
    public function setFirstChildPrice(float $price): static
    {
        $this->validate(
            property: 'firstChildPrice',
            value: (string) $price,
        );

        $this->firstChildPrice = $price;

        return $this;
    }
}
