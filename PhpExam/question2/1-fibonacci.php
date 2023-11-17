<?php
function fibonacci($n) {
    $fib = array(0, 1);

    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }

    return $fib;
}

// Change the value of $n to set the number of terms in the series
$n = 10;
$fibonacciSeries = fibonacci($n);

echo "Fibonacci Series for the first $n terms: ";
foreach ($fibonacciSeries as $value) {
    echo $value . " ";
}
?>
