<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Carbon\Carbon;
use Milzer\Infx\Attributes\Field;

trait HasEndDate
{
    /**
     * The end date.
     */
    #[Field(
        position: 8,
        length: 10,
    )]
    protected Carbon $endDate;

    /**
     * Get the end date of the Line.
     */
    public function getEndDate(): Carbon
    {
        return $this->endDate;
    }

    /**
     * Set the end date of the Line.
     */
    public function setEndDate(Carbon $endDate): static
    {
        $this->endDate = $endDate;

        return $this;
    }
}
