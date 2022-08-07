<?php
declare(strict_types = 1);

$time_start = microtime(true);

$output = range(1,100);

$output = array_map(
    function($i) {
        if ($i % 15 === 0) {
            return 'FizzBuzz';
        }

        if ($i % 3 === 0) {
            return 'Fizz';
        }

        if ($i % 5 === 0) {
            return 'Buzz';
        }

        return $i;
    },
    $output
);

$time_end = microtime(true);
$time = $time_end - $time_start;

print_r($output);

echo $time;
