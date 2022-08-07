<?php
declare(strict_types=1);

namespace FizzBuzz\Rules;

class BuzzRule implements RuleInterface
{
    public function matchNumber(int $number): bool
    {
        return $number % 5 === 0;
    }

    public function replaceNumber(): string
    {
        return 'Buzz';
    }
}