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
        validationRules: 'required|string|min:1|max:3',
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
        $this->validate(
            property: 'hotelCategory',
            value: $name,
        );

        $this->hotelCategory = $name;

        return $this;
    }
}
