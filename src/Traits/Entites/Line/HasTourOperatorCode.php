<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasTourOperatorCode
{
    /**
     * The tour operator code.
     */
    #[Field(
        position: 3,
        length: 5,
        validationRules: 'required|string|min:1|max:5',
        required: true
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
     *
     * @throws ReflectionException
     */
    public function setTourOperatorCode(string $tourOperatorCode): static
    {
        $this->validate(
            property: 'tourOperatorCode',
            value: $tourOperatorCode,
        );

        $this->tourOperatorCode = $tourOperatorCode;

        return $this;
    }
}
