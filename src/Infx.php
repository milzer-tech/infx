<?php

namespace Milzer\Infx;

use Milzer\Infx\Entities\Line;

class Infx
{
    /**
     * The lines of Infx.
     *
     * @var array<int, Line>
     */
    protected array $lines = [];

    /**
     * Create a new instance of Infx.
     */
    final public function __construct()
    {
    }

    /**
     * Create a new instance of Infx statically.
     */
    public static function make(): static
    {
        return new static();
    }

    /**
     * Add a line to the Infx.
     */
    public function addLine(Line $line): static
    {
        $this->lines[] = $line;

        return $this;
    }

    /**
     * Add lines to the Infx.
     *
     * @param iterable<Line> $lines
     */
    public function addLines(iterable $lines): static
    {
        foreach ($lines as $line) {
            if(!$line instanceof Line) {
                throw new \InvalidArgumentException('The line must be an instance of ' . Line::class);
            }

            $this->addLine($line);
        }

        return $this;
    }

    /**
     * Get the lines of the Infx.
     *
     * @return array<int, Line>
     */
    public function getLines(): array
    {
        return $this->lines;
    }
}
