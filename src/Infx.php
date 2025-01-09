<?php

namespace Milzer\Infx;

use InvalidArgumentException;
use Milzer\Infx\Entities\Line;
use ReflectionException;
use RuntimeException;

class Infx
{
    /**
     * File handle resource.
     *
     * @var resource
     */
    protected $fileHandle;

    /**
     * Create a new instance of Infx.
     *
     * @throws RuntimeException.
     */
    final public function __construct(string $filePath, bool $append = false)
    {
        if (file_exists($filePath) && ! $append) {
            throw new RuntimeException("File already exists: {$filePath}");
        }

        $fileHandle = fopen($filePath, $append ? 'a' : 'w');

        if ($fileHandle === false) {
            throw new RuntimeException("Failed to open file: {$filePath}");
        }

        $this->fileHandle = $fileHandle;
    }

    /**
     * Create a new instance of Infx statically.
     */
    public static function make(string $filePath, bool $append = false): static
    {
        return new static($filePath, $append);
    }

    /**
     * Add a line to the Infx file.
     *
     * @throws ReflectionException
     */
    public function addLine(Line $line): static
    {
        fwrite(
            stream: $this->fileHandle,
            data: $line->toString().PHP_EOL
        );

        return $this;
    }

    /**
     * Add multiple lines to the Infx file.
     *
     * @param  iterable<Line>  $lines
     *
     * @throws ReflectionException
     */
    public function addLines(iterable $lines): static
    {
        foreach ($lines as $line) {
            if (! $line instanceof Line) {
                throw new InvalidArgumentException('The line must be an instance of '.Line::class);
            }

            $this->addLine($line);
        }

        return $this;
    }

    /**
     * Close the file handle.
     */
    public function close(): void
    {
        if (is_resource($this->fileHandle)) {
            fclose($this->fileHandle);
        }
    }

    /**
     * Close the file handle when the instance is destructed.
     */
    public function __destruct()
    {
        $this->close();
    }
}
