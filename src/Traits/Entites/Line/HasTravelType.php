<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasTravelType
{
    /**
     * The travel type of the line.
     */
    #[Field(
        position: 51,
        length: 2,
        validationRules: 'required|string|min:1|max:2',
    )]
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
        $this->validate(
            property: 'travelType',
            value: $type,
        );

        $this->travelType = $type;

        return $this;
    }
}
