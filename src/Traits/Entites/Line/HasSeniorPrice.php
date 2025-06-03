<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasSeniorPrice
{
    /**
     * The senior price of the line.
     */
    #[Field(
        position: 33,
        length: 12,
        validationRules: [
            //   'regex:/^(?!0(\.0{2})?$)(\d{1,10}(\.\d{1,2})?)$/',
        ],
        validationMessages: [
            //   'regex' => 'The format of the price must be between 0.01 and 9999999999.99.',
        ]
    )]
    protected float $seniorPrice;

    /**
     * Get the senior price of the line.
     */
    public function getSeniorPrice(): float
    {
        return $this->seniorPrice;
    }

    /**
     * Set the senior price of the line.
     */
    public function setSeniorPrice(float $price): static
    {
        $this->seniorPrice = $price;

        return $this;
    }
}
