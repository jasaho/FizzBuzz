<?php
declare(strict_types=1);

namespace FizzBuzz\Rules;

class FizzRule implements RuleInterface
{
    private const REPLACEMENT = 'Fizz';

    public function matchNumber(int $number): bool
    {
        return $number % 3 === 0;
    }

    public function replaceNumber(): string
    {
        return self::REPLACEMENT;
    }
}