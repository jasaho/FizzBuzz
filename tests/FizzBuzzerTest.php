<?php
declare(strict_types=1);

use FizzBuzz\Rules\RuleInterface;
use PHPUnit\Framework\TestCase;

class FizzBuzzerTest extends TestCase
{
    /** @dataProvider RulesProvider */
    public function testRules($number, $match, $expected): void
    {
        $rule = $this->createMock(RuleInterface::class);
        $rule->method('matchNumber')
            ->with($number)
            ->willReturn($match);
        $rule->method('replaceNumber')
            ->willReturn('dummy');

        $rules = [$rule];

        $fizzBuzzer = new FizzBuzz\FizzBuzzer($rules);
        $output = $fizzBuzzer->generateOutput($number,$number);
        $this->assertSame($expected, $output[0]);
    }

    public function RulesProvider(): array
    {
        return [
            'divisible' => [3, true, 'dummy'],
            'not divisible' => [10, false, 10]
        ];
    }

    /** @dataProvider RangeParameterProvider */
    public function testRangeParameters(int $range_from, int $range_to, $expectedRange): void
    {
        $fizzBuzzer = new FizzBuzz\FizzBuzzer([]);
        $output = $fizzBuzzer->generateOutput($range_from,$range_to);
        $this->assertSame($expectedRange, count($output));
    }

    public function RangeParameterProvider(): array
    {
        return [
            [3, 10, 8],
            [40,31,10],
            [-3,2,6],
            [0,0,1]
        ];
    }
}
