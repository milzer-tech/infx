<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasCatalogName
{
    /**
     * The catalog name of the line.
     */
    #[Field(
        position: 72,
        length: 40,
        validationRules: 'required|string|min:1|max:40',
    )]
    protected string $catalogName;

    /**
     * Get the catalog name of the line.
     */
    public function getCatalogName(): string
    {
        return $this->catalogName;
    }

    /**
     * Set the catalog name of the line.
     *
     * @throws ReflectionException
     */
    public function setCatalogName(string $name): static
    {
        $this->validate(
            property: 'catalogName',
            value: $name,
        );

        $this->catalogName = $name;

        return $this;
    }
}
