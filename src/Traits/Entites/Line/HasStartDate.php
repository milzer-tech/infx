<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Carbon\Carbon;
use Milzer\Infx\Attributes\Field;

trait HasStartDate
{
    /**
     * The start date.
     */
    #[Field(
        position: 7,
        length: 10,
        validationRules: ['required']
    )]
    protected Carbon $startDate;

    /**
     * Get the start date of the Line.
     */
    public function getStartDate(): Carbon
    {
        return $this->startDate;
    }

    /**
     * Set the start date of the Line.
     */
    public function setStartDate(Carbon $startDate): static
    {
        $this->startDate = $startDate;

        return $this;
    }
}
