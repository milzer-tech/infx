<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait Position09Leer
{
    /**
     * The format of the sentence.
     */
    #[Field(
        position: 9,
        length: 6,
    )]
    protected string $leer;
}
