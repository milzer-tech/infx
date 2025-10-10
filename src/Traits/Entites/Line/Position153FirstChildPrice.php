<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait Position153FirstChildPrice
{
    /**
     * The first child price.
     */
    #[Field(
        position: 153,
        length: 12
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
     */
    public function setFirstChildPrice(float $price): static
    {
        $this->firstChildPrice = $price;

        return $this;
    }
}
