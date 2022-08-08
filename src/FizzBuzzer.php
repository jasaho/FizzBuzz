<?php
declare(strict_types=1);

namespace FizzBuzz;

use FizzBuzz\Rules\RuleInterface;
use FizzBuzz\Rules\RuleSetInterface;

class FizzBuzzer
{
    /** @var RuleInterface[] */
    private $rules = [];

    /**
     * @param RuleSetInterface $ruleSet
     */
    public function __construct(RuleSetInterface $ruleSet)
    {
        $this->rules = $ruleSet->toArray();
    }

    /**
     * @param int $range_from
     * @param int $range_to
     * @return array
     */
    public function generateOutput(int $range_from, int $range_to): array
    {
        $numbers = range($range_from,$range_to);
        $rules = $this->rules;

        return array_map(
            function($i) use ($rules) {
                foreach ($rules as $rule) {
                    if ($rule->matchNumber($i)) {
                        return $rule->replaceNumber();
                    }
                }

                return $i;
            },
            $numbers
        );
    }
}