<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasBoardCode
{
    /**
     * The board code of the Line.
     */
    #[Field(
        position: 49,
        length: 2,
        validationRules: 'required|string|min:1|max:2'
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
     *
     * @throws ReflectionException
     */
    public function setBoardCode(string $code): static
    {
        $this->validate(
            property: 'boardCode',
            value: $code,
        );

        $this->boardCode = $code;

        return $this;
    }
}
