<?php
declare(strict_types=1);

use FizzBuzz\Rules\BuzzRule;
use FizzBuzz\Rules\FizzBuzzRule;
use FizzBuzz\Rules\FizzRule;
use PHPUnit\Framework\TestCase;

class FizzBuzzerTest extends TestCase
{
    /** @dataProvider RulesProvider */
    public function testRules(int $number, $rule, $expectedResult): void
    {
        $rules = [$rule];

        $fizzBuzzer = new FizzBuzz\FizzBuzzer($rules);
        $output = $fizzBuzzer->generateOutput($number,$number);
        $this->assertSame($expectedResult, $output[0]);
    }

    public function RulesProvider(): array
    {
        return [
            'divisible by 3' => [3, new FizzRule(),'Fizz'],
            'divisible by 5' => [5, new BuzzRule(),'Buzz'],
            'divisible by 15' => [15, new FizzBuzzRule(),'FizzBuzz']
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
