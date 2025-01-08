<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasTomaTravelMode
{
    /**
     * The TOMA travel mode of the line.
     */
    #[Field(
        position: 54,
        length: 4,
        validationRules: 'required|string|min:1|max:4',
        required: true,
    )]
    protected string $tomaTravelMode;

    /**
     * Get the TOMA travel mode of the line.
     */
    public function getTomaTravelMode(): string
    {
        return $this->tomaTravelMode;
    }

    /**
     * Set the TOMA travel mode of the line.
     */
    public function setTomaTravelMode(string $value): static
    {
        $this->validate(
            property: 'tomaTravelMode',
            value: $value,
        );

        $this->tomaTravelMode = $value;

        return $this;
    }
}
