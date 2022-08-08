<?php
declare(strict_types=1);

namespace Rules;

use FizzBuzz\Rules\BuzzRule;
use PHPUnit\Framework\TestCase;

class BuzzRuleTest extends TestCase
{
    public function testMatchNumber()
    {
        $rule = new BuzzRule();
        $this->assertTrue($rule->matchNumber(5));
        $this->assertFalse($rule->matchNumber(4));
    }
}
