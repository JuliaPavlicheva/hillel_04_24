<?php
declare(strict_types=1);

function show_message(int $message): void
{
    echo $message . PHP_EOL;
}
function generate_array(int $length = 5, int $min = 1, int $max = 12): array
{
    $array = [];
    for ($i = 0; $i < $length; $i++) {
        $array[] = rand($min, $max);
    }

    return $array;
}

$new_array = generate_array();
var_dump($new_array);

$sum = 0;
foreach ($new_array as $el)
{
    $sum += $el;
}

$product = 1;
foreach ($new_array as $el)
{
    $product *= $el;
}

$amount_of_5 = 0;
foreach ($new_array as $el)
{
    if($el === 5) {
        $amount_of_5++;
    }
}

show_message($sum);
show_message($product);
show_message($amount_of_5);

foreach ($new_array as $el)
{
    if($el % 3 === 0) {
        show_message($el);
    }
}