<?php
declare(strict_types=1);

namespace Rules;

use FizzBuzz\Rules\FizzBuzzRule;
use PHPUnit\Framework\TestCase;

class FizzBuzzRuleTest extends TestCase
{
    public function testMatchNumber()
    {
        $rule = new FizzBuzzRule();
        $this->assertTrue($rule->matchNumber(15));
        $this->assertFalse($rule->matchNumber(4));
    }
}
