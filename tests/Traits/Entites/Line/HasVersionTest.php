<?php

use Milzer\Infx\Entities\Line;

test('it should return the default version', function (): void {
    expect(Line::make()->getVersion())->toBe('01');
});

test('it should set version to "00" when version 1 is passed', function (): void {
    $line = Line::make()->setVersion(1);

    expect($line->getVersion())->toBe('00');
});

test('it should set version to "01" when version 2 is passed', function (): void {
    $line = Line::make()->setVersion(2);

    expect($line->getVersion())->toBe('01');
});

test('it should throw exception when invalid version is passed', function (): void {
    expect(fn (): \Milzer\Infx\Entities\Line => Line::make()->setVersion(3))
        ->toThrow(InvalidArgumentException::class, 'The version field must not be greater than 2.');
});

test('it should throw exception when version is not in the valid range', function (): void {
    expect(fn (): \Milzer\Infx\Entities\Line => Line::make()->setVersion(0))
        ->toThrow(InvalidArgumentException::class, 'The version field must be at least 1.');
});

test('it should validate version correctly', function (): void {
    $line = Line::make()->setVersion(2);

    expect($line->getVersion())->toBe('01');
});
