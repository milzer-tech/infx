<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait Position297TravelTypeDescription
{
    /**
     * The description of the travel type.
     */
    #[Field(
        position: 297,
        length: 25,
        validationRules: ['string', 'min:1', 'max:25']
    )]
    protected string $travelTypeDescription;

    /**
     * Get the travel type of the line.
     */
    public function getTravelTypeDescription(): string
    {
        return $this->travelTypeDescription;
    }

    /**
     * Set the travel type of the line.
     */
    public function setTravelTypeDescription(string $text): static
    {
        $this->travelTypeDescription = $text;

        return $this;
    }
}
