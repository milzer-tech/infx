<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;

trait Position326TomaTravelMode
{
    /**
     * The TOMA travel mode of the line.
     */
    #[Field(position: 326, length: 4, validationRules: ['string', 'min:0', 'max:4'])]
    #[Phoenix(position: 568, length: 1, validationRules: ['string', 'min:0', 'max:1'])]
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
        $this->tomaTravelMode = $value;

        return $this;
    }
}
