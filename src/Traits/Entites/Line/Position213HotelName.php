<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;

trait Position213HotelName
{
    /**
     * The hotel name.
     */
    #[Field(position: 213, length: 25, validationRules: ['string', 'min:0', 'max:25'])]
    #[Phoenix(position: 115, length: 20, validationRules: ['string', 'min:0', 'max:20'])]
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
