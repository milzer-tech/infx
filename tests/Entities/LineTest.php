<?php

use Carbon\Carbon;
use Milzer\Infx\Entities\Line;

it('make returns a Line instance', function (): void {
    $line = Line::make();

    expect($line)->toBeInstanceOf(Line::class);
});

it('__toString delegates to toString', function (): void {
    $line = Line::make()
        ->setTourOperatorCode('TO')
        ->setStartDate(Carbon::parse('2025-01-15'))
        ->setCurrency('EUR')
        ->setPrice('123.45')
        ->setTomaOrganizer('ABCD')
        ->setTomaAction('OK');

    // When required fields are set, __toString should equal toString
    expect((string) $line)->toBe($line->toString());
});

it('setDefaultValues assigns defaults on construction (scalar)', function (): void {
    // Choose a property that is not used by other tests to avoid side effects
    Line::setDefaultValues([
        'partner' => 'PARTNER1',
    ]);

    $line = Line::make();

    expect($line->getPartner())->toBe('PARTNER1');
});

it('setDefaultValues throws when property does not exist', function (): void {
    expect(fn () => Line::setDefaultValues(['doesNotExist' => 'x']))
        ->toThrow(InvalidArgumentException::class, 'The property doesNotExist does not exist on '.Line::class);
});
