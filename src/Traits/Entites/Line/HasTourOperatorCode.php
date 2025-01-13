<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasTourOperatorCode
{
    /**
     * The tour operator code.
     */
    #[Field(
        position: 3,
        length: 5,
        validationRules: ['required', 'string', 'min:1', 'max:5'] //Todo: "required" check it with Simon
    )]
    protected string $tourOperatorCode;

    /**
     * Get the tour operator code of the Line.
     */
    public function getTourOperatorCode(): string
    {
        return $this->tourOperatorCode;
    }

    /**
     * Set the tour operator code of the Line.
     */
    public function setTourOperatorCode(string $tourOperatorCode): static
    {
        $this->tourOperatorCode = $tourOperatorCode;

        return $this;
    }
}
