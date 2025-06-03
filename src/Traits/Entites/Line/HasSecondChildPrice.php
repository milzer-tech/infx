<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasSecondChildPrice
{
    /**
     * The second child price.
     */
    #[Field(
        position: 40,
        length: 12,
        validationRules: [
            //   'regex:/^(?!0(\.0{2})?$)(\d{1,10}(\.\d{1,2})?)$/',
        ],
        validationMessages: [
            //   'regex' => 'The format of the price must be between 0.01 and 9999999999.99.',
        ]
    )]
    protected float $secondChildPrice;

    /**
     * Get the second child price.
     */
    public function getSecondChildPrice(): float
    {
        return $this->secondChildPrice;
    }

    /**
     * Set the second child price.
     */
    public function setSecondChildPrice(float $price): static
    {
        $this->secondChildPrice = $price;

        return $this;
    }
}
