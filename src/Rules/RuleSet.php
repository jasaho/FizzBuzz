<?php

namespace FizzBuzz\Rules;

class RuleSet implements RuleSetInterface
{
    private $rules = [];

    public function __construct()
    {
    }

    public function add(RuleInterface $rule): self
    {
        $this->rules[] = $rule;

        return $this;
    }

    public function toArray(): array
    {
        return (array) $this->rules;
    }
}