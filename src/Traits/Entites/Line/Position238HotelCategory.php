<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;

trait Position238HotelCategory
{
    /**
     * The hotel category.
     */
    #[Field(position: 238, length: 3, validationRules: ['string', 'min:0', 'max:3'])]
    #[Phoenix(position: 395, length: 3, validationRules: ['string', 'min:0', 'max:3'])]
    protected string $hotelCategory;

    /**
     * Get the hotel category.
     */
    public function getHotelCategory(): string
    {
        return $this->hotelCategory;
    }

    /**
     * Set the hotel category.
     */
    public function setHotelCategory(string $name): static
    {
        $this->hotelCategory = $name;

        return $this;
    }
}
