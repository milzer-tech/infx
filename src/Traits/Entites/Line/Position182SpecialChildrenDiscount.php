<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait Position182SpecialChildrenDiscount
{
    /**
     * The special discount.
     */
    #[Field(
        position: 182,
        length: 1,
    )]
    protected string $specialChildrenDiscount;
}
