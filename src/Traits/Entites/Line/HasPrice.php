<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasPrice
{
    /**
     * The currency of the line.
     */
    #[Field(
        position: 32,
        length: 12,
        validationRules: [
            'required',
     //       'regex:/^(?!0(\.0{2})?$)(\d{1,10}(\.\d{1,2})?)$/',
        ],
        validationMessages: [
       //     'regex' => 'The format of the price must be between 0.01 and 9999999999.99.',
        ]
    )]
    protected float $price;

    /**
     * Get the price of the line.
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Set the currency of the line.
     */
    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }
}
