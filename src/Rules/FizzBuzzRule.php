<?php
declare(strict_types=1);

namespace FizzBuzz\Rules;

class FizzBuzzRule implements RuleInterface
{
    public function matchNumber(int $number): bool
    {
        return $number % 15 === 0;
    }

    public function replaceNumber(): string
    {
        return 'FizzBuzz';
    }
}