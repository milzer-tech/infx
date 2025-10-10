<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait Position270BoardDescription
{
    /**
     * The board description.
     */
    #[Field(
        position: 270,
        length: 25,
        validationRules: ['string', 'min:1', 'max:25']
    )]
    protected string $boardDescription;

    /**
     * Get the board description.
     */
    public function getBoardDescription(): string
    {
        return $this->boardDescription;
    }

    /**
     * Set the board description.
     */
    public function setBoardDescription(string $text): static
    {
        $this->boardDescription = $text;

        return $this;
    }
}
