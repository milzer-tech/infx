<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait Position41SpecialDiscount
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
