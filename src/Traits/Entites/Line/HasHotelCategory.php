<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasHotelCategory
{
    /**
     * The hotel category.
     */
    #[Field(
        position: 46,
        length: 3,
        validationRules: ['string', 'min:1', 'max:3']
    )]
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
