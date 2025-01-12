<?php

use Milzer\Infx\Entities\Line;


test('it should return the default version', function () {
    expect(Line::make()->getVersion())->toBe('01');
});

test('it should set version to "00" when version 1 is passed', function () {
    $line = Line::make()->setVersion(1);

    expect($line->getVersion())->toBe('00');
});

test('it should set version to "01" when version 2 is passed', function () {
    $line = Line::make()->setVersion(2);

    expect($line->getVersion())->toBe('01');
});

test('it should throw exception when invalid version is passed', function () {
    expect(fn () => Line::make()->setVersion(3))
        ->toThrow(InvalidArgumentException::class, 'The version field must not be greater than 2.');
});

test('it should throw exception when version is not in the valid range', function () {
    expect(fn () => Line::make()->setVersion(0))
        ->toThrow(InvalidArgumentException::class, 'The version field must be at least 1.');
});

test('it should validate version correctly', function () {
    $line = Line::make()->setVersion(2);

    expect($line->getVersion())->toBe('01');
});
