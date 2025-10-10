<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait Position344TomaFirstPerformance
{
    /**
     * The first TOMA performance of the line.
     */
    #[Field(
        position: 344,
        length: 17,
        validationRules: ['string', 'min:1', 'max:17']
    )]
    protected string $tomaFirstPerformance;

    /**
     * Get the first TOMA performance of the line.
     */
    public function getTomaFirstPerformance(): string
    {
        return $this->tomaFirstPerformance;
    }

    /**
     * Set the first TOMA performance of the line.
     */
    public function setTomaFirstPerformance(string $value): static
    {
        $this->tomaFirstPerformance = $value;

        return $this;
    }
}
