<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasBoardCode
{
    /**
     * The board code of the Line.
     */
    #[Field(
        position: 49,
        length: 2,
        validationRules: ['string', 'min:1', 'max:2']
    )]
    protected string $boardCode;

    /**
     * Get the board code of the Line.
     */
    public function getBoardCode(): string
    {
        return $this->boardCode;
    }

    /**
     * Set the board code of the Line.
     */
    public function setBoardCode(string $code): static
    {
        $this->boardCode = $code;

        return $this;
    }
}
