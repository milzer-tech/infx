<?php

namespace Milzer\Infx\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
final readonly class Field
{
    /**
     * Create a new instance of the Length.
     *
     * @param  array<int, string>|string  $validationRules
     * @param  array<int, string>  $validationMessages
     */
    public function __construct(
        public int $position,
        public int $length,
        public array|string $validationRules = [],
        public array $validationMessages = [],
        public bool $required = false,
    ) {}
}
