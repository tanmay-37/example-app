<?php

function generateFibonacci($n) {
    $fibonacciSequence = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fibonacciSequence[$i] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
    }
    return $fibonacciSequence;
}


$numberOfTerms = 10;
$result = generateFibonacci($numberOfTerms);


echo "Fibonacci Sequence: ";
for ($i = 0; $i < $numberOfTerms; $i++) {
    echo $result[$i];
    if ($i !== $numberOfTerms - 1) {
        echo ", ";
    }
}
echo "\n";
?>
