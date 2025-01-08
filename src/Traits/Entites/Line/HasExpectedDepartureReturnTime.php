<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasExpectedDepartureReturnTime
{
    /**
     * The expected.
     *
     * `TODO : Check with simon. it's not on the documentation.
     *  Does not have getter and setter.
     */
    #[Field(
        position: 21,
        length: 1,
        validationRules: 'string|min:1|max:1'
    )]
    protected string $expectedDepartureReturnTime = 'v';
}
