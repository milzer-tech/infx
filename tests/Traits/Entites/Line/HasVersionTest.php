<?php

use Milzer\Infx\Entities\Line;

test('it should set version to "00" when version 1 is passed', function (): void {
    $line = Line::make()->setVersion(1);

    expect($line->getVersion())->toBe('00');
});

test('it should set version to "01" when version 2 is passed', function (): void {
    $line = Line::make()->setVersion(2);

    expect($line->getVersion())->toBe('01');
});

test('it should validate version correctly', function (): void {
    $line = Line::make()->setVersion(2);

    expect($line->getVersion())->toBe('01');
});
