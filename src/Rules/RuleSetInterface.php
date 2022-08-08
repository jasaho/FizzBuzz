<?php
declare(strict_types=1);

namespace FizzBuzz\Rules;

interface RuleSetInterface
{
    public function add(RuleInterface $rule): RuleSet;

    public function toArray(): array;
}