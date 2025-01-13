<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasHotelName
{
    /**
     * The hotel name.
     */
    #[Field(
        position: 45,
        length: 25,
        validationRules: ['required', 'string', 'min:1', 'max:25']
    )]
    protected string $hotelName;

    /**
     * Get the hotel name.
     */
    public function getHotelName(): string
    {
        return $this->hotelName;
    }

    /**
     * Set the hotel name.
     */
    public function setHotelName(string $name): static
    {
        $this->hotelName = $name;

        return $this;
    }
}
