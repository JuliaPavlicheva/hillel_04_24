<?php
declare(strict_types=1);

function multiply(int $a, int $b, ?closure $callback = null): mixed
{
    $result = $a * $b;
    if(null !== $callback) {
        return $callback($result);
    }
    return $result;
}

//$multiply_result = multiply(9, 3);
//echo $multiply_result . PHP_EOL;

multiply(2, 3, function (int $param_callback): void
{
    echo "Result of callback is " . $param_callback . PHP_EOL;
});


