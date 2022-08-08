<?php
declare(strict_types=1);

namespace FizzBuzz\Rules;

class BuzzRule implements RuleInterface
{
    private const REPLACEMENT = 'Buzz';

    public function matchNumber(int $number): bool
    {
        return $number % 5 === 0;
    }

    public function replaceNumber(): string
    {
        return self::REPLACEMENT;
    }
}