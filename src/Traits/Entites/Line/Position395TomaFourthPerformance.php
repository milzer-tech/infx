<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait Position395TomaFourthPerformance
{
    /**
     * The fourth TOMA performance of the line.
     */
    #[Field(
        position: 395,
        length: 17,
        validationRules: ['string', 'min:1', 'max:17']
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
     */
    public function setTomaFourthPerformance(string $value): static
    {
        $this->tomaFourthPerformance = $value;

        return $this;
    }
}
