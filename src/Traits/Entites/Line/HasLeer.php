<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasLeer
{
    /**
     * The format of the sentence.
     */
    #[Field(
        position: 4,
        length: 6,
    )]
    protected string $leer;
}
