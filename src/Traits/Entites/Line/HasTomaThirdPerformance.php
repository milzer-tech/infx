<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasTomaThirdPerformance
{
    /**
     * The third TOMA performance of the line.
     */
    #[Field(
        position: 62,
        length: 17,
        validationRules: ['string', 'min:1', 'max:17'],
    )]
    protected string $tomaThirdPerformance;

    /**
     * Get the third TOMA performance of the line.
     */
    public function getTomaThirdPerformance(): string
    {
        return $this->tomaThirdPerformance;
    }

    /**
     * Set the third TOMA performance of the line.
     */
    public function setTomaThirdPerformance(string $value): static
    {
        $this->tomaThirdPerformance = $value;

        return $this;
    }
}
