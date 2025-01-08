<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasTravelTypeDescription
{
    /**
     * The description of the travel type.
     */
    #[Field(
        position: 52,
        length: 25,
        validationRules: 'required|string|min:1|max:25',
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
        $this->validate(
            property: 'travelTypeDescription',
            value: $text,
        );

        $this->travelTypeDescription = $text;

        return $this;
    }
}
