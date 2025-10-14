<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;

trait Position113Price
{
    /**
     * The currency of the line.
     */
    #[Field(position: 113, length: 12)]
    #[Phoenix(position: 68, length: 5)]
    protected string $price;

    /**
     * Get the price of the line.
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * Set the currency of the line.
     */
    public function setPrice(string $price): static
    {
        $this->price = $price;

        return $this;
    }
}
