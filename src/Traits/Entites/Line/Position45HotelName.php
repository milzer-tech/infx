<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait Position45HotelName
{
    /**
     * The hotel name.
     */
    #[Field(
        position: 45,
        length: 25,
        validationRules: ['string', 'min:1', 'max:25']
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
