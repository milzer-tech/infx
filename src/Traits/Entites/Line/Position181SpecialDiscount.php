<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait Position181SpecialDiscount
{
    /**
     * The special discount.
     */
    #[Field(
        position: 181,
        length: 1,
    )]
    protected string $specialDiscount;
}
