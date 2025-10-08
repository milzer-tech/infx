<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait Position42SpecialChildrenDiscount
{
    /**
     * The special discount.
     */
    #[Field(
        position: 42,
        length: 1,
    )]
    protected string $specialChildrenDiscount;
}
