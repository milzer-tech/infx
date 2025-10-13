<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait Position169SecondChildPrice
{
    /**
     * The second child price.
     */
    #[Field(
        position: 169,
        length: 12
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
