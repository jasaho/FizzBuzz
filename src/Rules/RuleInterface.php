<?php
declare(strict_types=1);

namespace FizzBuzz\Rules;

interface RuleInterface
{
    public function matchNumber(int $number): bool;
    public function replaceNumber(): string;
}