<?php

use Milzer\Infx\Infx;
use Milzer\Infx\Entities\Line;

beforeEach(function (): void {
    $this->filePath = __DIR__ . '/test_infx_file.txt';

    if (file_exists($this->filePath)) {
        unlink($this->filePath);
    }
});

test('it should create a file in write mode', function (): void {
    $infx = Infx::make($this->filePath);

    $reflection = new ReflectionProperty(Infx::class, 'fileHandle');

    $fileHandle = $reflection->getValue($infx);
    expect(is_resource($fileHandle))->toBeTrue();
});

test('it should throw exception if file already exists and append is false', function (): void {
    file_put_contents($this->filePath, 'Some initial content');

    expect(fn(): \Milzer\Infx\Infx => Infx::make($this->filePath))
        ->toThrow(RuntimeException::class, "File already exists: {$this->filePath}");
});

test('it should append to an existing file when append is true', function (): void {
    file_put_contents($this->filePath, 'Initial content');

    $infx = Infx::make($this->filePath, true);

    $line = Mockery::mock(Line::class);
    $line->shouldReceive('toString')->andReturn('Appended content');

    $infx->addLine($line);

    $content = file_get_contents($this->filePath);
    expect($content)->toContain('Appended content');
});


test('it should add lines to the file', function (): void {
    $infx = Infx::make($this->filePath);

    $line1 = Mockery::mock(Line::class);
    $line1->shouldReceive('toString')->andReturn('First line content');

    $line2 = Mockery::mock(Line::class);
    $line2->shouldReceive('toString')->andReturn('Second line content');

    $infx->addLines([$line1, $line2]);

    $content = file_get_contents($this->filePath);
    expect($content)->toContain('First line content')
        ->and($content)->toContain('Second line content');
});

test('it should close the file handle', function (): void {
    $infx = Infx::make($this->filePath);

    $reflection = new ReflectionProperty(Infx::class, 'fileHandle');

    $fileHandle = $reflection->getValue($infx);
    expect(is_resource($fileHandle))->toBeTrue();

    $infx->close();
    expect(is_resource($fileHandle))->toBeFalse();  // File handle should be closed
});

afterEach(function (): void {
    if (file_exists($this->filePath)) {
        unlink($this->filePath);
    }

    Mockery::close();
});
