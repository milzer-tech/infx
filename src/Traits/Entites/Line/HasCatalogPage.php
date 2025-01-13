<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasCatalogPage
{
    /**
     * The catalog page of the line.
     */
    #[Field(
        position: 73,
        length: 4,
        validationRules: ['int', 'min:1', 'max:9999']
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
     */
    public function setCatalogPage(int $page): static
    {
        $this->catalogPage = $page;

        return $this;
    }
}
