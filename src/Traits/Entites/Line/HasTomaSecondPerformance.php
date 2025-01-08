<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasTomaSecondPerformance
{
    /**
     * The second TOMA performance of the line.
     */
    #[Field(
        position: 61,
        length: 17,
        validationRules: 'required|string|min:1|max:17',
    )]
    protected string $tomaSecondPerformance;

    /**
     * Get the second TOMA performance of the line.
     */
    public function getTomaSecondPerformance(): string
    {
        return $this->tomaSecondPerformance;
    }

    /**
     * Set the second TOMA performance of the line.
     *
     * @throws ReflectionException
     */
    public function setTomaSecondPerformance(string $value): static
    {
        $this->validate(
            property: 'tomaSecondPerformance',
            value: $value,
        );

        $this->tomaSecondPerformance = $value;

        return $this;
    }
}
