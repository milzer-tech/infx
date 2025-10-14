<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;

trait Position188DestinationLocation
{
    /**
     * The destination location.
     */
    #[Field(position: 188, length: 25, validationRules: ['string', 'min:0', 'max:25'])]
    #[Phoenix(position: 135, length: 20, validationRules: ['string', 'min:0', 'max:20'])]
    protected string $destinationLocation;

    /**
     * Get the destination location.
     */
    public function getDestinationLocation(): string
    {
        return $this->destinationLocation;
    }

    /**
     * Set the destination location.
     */
    public function setDestinationLocation(string $location): static
    {
        $this->destinationLocation = $location;

        return $this;
    }
}
