<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;

trait Position268BoardCode
{
    /**
     * The board code of the Line.
     */
    #[Field(position: 268, length: 2, validationRules: ['string', 'min:0', 'max:2'])]
    #[Phoenix(position: 64, length: 3, validationRules: ['string', 'min:0', 'max:3'])]
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
