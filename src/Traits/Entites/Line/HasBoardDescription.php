<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasBoardDescription
{
    /**
     * The board description.
     */
    #[Field(
        position: 50,
        length: 25,
        validationRules: 'required|string|min:1|max:25',
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
        $this->validate(
            property: 'boardDescription',
            value: $text,
        );

        $this->boardDescription = $text;

        return $this;
    }
}
