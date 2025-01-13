<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasTomaFirstPerformance
{
    /**
     * The first TOMA performance of the line.
     */
    #[Field(
        position: 60,
        length: 17,
        validationRules: ['required', 'string', 'min:1', 'max:17']
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
