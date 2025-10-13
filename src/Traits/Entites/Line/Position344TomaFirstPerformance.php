<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use Milzer\Infx\Attributes\Phoenix;

trait Position344TomaFirstPerformance
{
    /**
     * The first TOMA performance of the line.
     */
    #[Field(position: 344, length: 17, validationRules: ['string', 'min:0', 'max:17'])]
    #[Phoenix(position: 44, length: 17, validationRules: ['string', 'min:0', 'max:17'])]
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
