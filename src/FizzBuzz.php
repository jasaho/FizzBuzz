<?php
declare(strict_types=1);

use FizzBuzz\FizzBuzzer;
use FizzBuzz\Rules\BuzzRule;
use FizzBuzz\Rules\FizzBuzzRule;
use FizzBuzz\Rules\FizzRule;

require '../vendor/autoload.php';

$time_start = microtime(true);

$rules = [
    new FizzBuzzRule(),
    new FizzRule(),
    new BuzzRule()
];

$fizzBuzzer = new FizzBuzzer($rules);

echo implode (PHP_EOL,$fizzBuzzer->generateOutput(1,100));

$time_end = microtime(true);
$time = $time_end - $time_start;

echo PHP_EOL . $time;