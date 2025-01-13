<?php

namespace Milzer\Infx\Traits\Entites\Line;

use Milzer\Infx\Attributes\Field;

trait HasSentenceFormat
{
    /**
     * The format of the sentence.
     */
    #[Field(
        position: 2,
        length: 1,
        validationRules: ['required', 'string', 'min:1', 'max:1']
    )]
    protected string $sentenceFormat = 'V';

    /**
     * Get the sentence format of the Line.
     */
    public function getSentenceFormat(): string
    {
        return $this->sentenceFormat;
    }

    /**
     * Set the sentence format of the Line.
     */
    public function setSentenceFormat(string $sentenceFormat): static
    {
        $this->sentenceFormat = $sentenceFormat;

        return $this;
    }
}
