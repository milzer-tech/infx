<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasTomaFourthPerformance
{
    /**
     * The fourth TOMA performance of the line.
     */
    #[Field(
        position: 63,
        length: 17,
        validationRules: 'required|string|min:1|max:17',
    )]
    protected string $tomaFourthPerformance;

    /**
     * Get the fourth TOMA performance of the line.
     */
    public function getTomaFourthPerformance(): string
    {
        return $this->tomaFourthPerformance;
    }

    /**
     * Set the fourth TOMA performance of the line.
     *
     * @throws ReflectionException
     */
    public function setTomaFourthPerformance(string $value): static
    {
        $this->validate(
            property: 'tomaFourthPerformance',
            value: $value,
        );

        $this->tomaFourthPerformance = $value;

        return $this;
    }
}
