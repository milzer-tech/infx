<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;
use ReflectionException;

trait HasCatalogPage
{
    /**
     * The catalog page of the line.
     */
    #[Field(
        position: 73,
        length: 4,
        validationRules: 'required|int|min:1|max:9999',
    )]
    protected int $catalogPage;

    /**
     * Get the catalog page of the line.
     */
    public function getCatalogPage(): int
    {
        return $this->catalogPage;
    }

    /**
     * Set the catalog page of the line.
     *
     * @throws ReflectionException
     */
    public function setCatalogPage(int $page): static
    {
        $this->validate(
            property: 'catalogPage',
            value: $page,
        );

        $this->catalogPage = $page;

        return $this;
    }
}
