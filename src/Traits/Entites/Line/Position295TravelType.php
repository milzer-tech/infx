<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;

trait Position295TravelType
{
    /**
     * The travel type of the line.
     */
    #[Field(position: 295, length: 2, validationRules: ['string', 'min:0', 'max:2'])]
    #[Phoenix(position: 570, length: 1, validationRules: ['string', 'min:0', 'max:1'])]
    protected string $travelType;

    /**
     * Get the travel type of the line.
     */
    public function getTravelType(): string
    {
        return $this->travelType;
    }

    /**
     * Set the travel type of the line.
     */
    public function setTravelType(string $type): static
    {
        $this->travelType = $type;

        return $this;
    }
}
