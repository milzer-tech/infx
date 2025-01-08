<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasSpecialDiscount
{
    /**
     * The special discount.
     */
    #[Field(
        position: 41,
        length: 1,
    )]
    protected string $specialDiscount;
}
