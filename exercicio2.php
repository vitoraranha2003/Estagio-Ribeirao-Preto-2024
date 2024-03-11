<?php

function isFibonacci($num) {
    $prev = 0;
    $curr = 1;

    while ($curr <= $num) {
        if ($curr == $num) {
            return true;
        }
        $next = $prev + $curr;
        $prev = $curr;
        $curr = $next;
    }
    return false;
}

function fibonacciSequence($num) {
    $sequence = array(0, 1);
    $prev = 0;
    $curr = 1;

    while ($curr <= $num) {
        $next = $prev + $curr;
        $sequence[] = $next;
        $prev = $curr;
        $curr = $next;
    }

    return $sequence;
}

$number = 31;

if (isFibonacci($number)) {
    echo "$number pertence à sequência de Fibonacci.\n";
} else {
    echo "$number não pertence à sequência de Fibonacci.\n";
}

echo "A sequência de Fibonacci até $number é: " . implode(', ', fibonacciSequence($number));