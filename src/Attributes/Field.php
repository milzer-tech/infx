<?php

namespace Milzer\Infx\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
readonly class Field
{
    /**
     * Create a new instance of the Length.
     *
     * @param  array<int, string>  $validationRules
     * @param  array<string, string>  $validationMessages
     */
    public function __construct(
        public int $position,
        public int $length,
        public array $validationRules = [],
        public array $validationMessages = [],
    ) {}
}
