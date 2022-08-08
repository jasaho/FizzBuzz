<?php
declare(strict_types=1);

namespace Rules;

use FizzBuzz\Rules\FizzRule;
use PHPUnit\Framework\TestCase;

class FizzRuleTest extends TestCase
{
    public function testMatchNumber(): void
    {
        $rule = new FizzRule();
        $this->assertTrue($rule->matchNumber(3));
        $this->assertFalse($rule->matchNumber(4));
    }
}
