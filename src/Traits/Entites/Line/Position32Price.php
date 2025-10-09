<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait Position32Price
{
    /**
     * The currency of the line.
     */
    #[Field(
        position: 32,
        length: 12
    )]
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
