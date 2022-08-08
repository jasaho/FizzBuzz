<?php

namespace FizzBuzz\Rules;

interface RuleSetInterface
{
    public function add(RuleInterface $rule): RuleSet;

    public function toArray(): array;
}