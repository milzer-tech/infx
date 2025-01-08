<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasDestinationLocation
{
    /**
     * The destination location.
     */
    #[Field(
        position: 44,
        length: 25,
        validationRules: 'required|string|min:1|max:25',
    )]
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
        $this->validate(
            property: 'destinationLocation',
            value: $location,
        );

        $this->destinationLocation = $location;

        return $this;
    }
}
