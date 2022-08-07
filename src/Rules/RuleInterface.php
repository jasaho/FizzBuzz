<?php

namespace FizzBuzz\Rules;

interface RuleInterface
{
    public function matchNumber(int $number): bool;
    public function replaceNumber(): string;
}