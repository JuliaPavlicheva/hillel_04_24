<?php
declare(strict_types=1);

function show_message(mixed $message): void
{
    echo $message . PHP_EOL;
}
function generate_array(int $length = 5, int $min = -10, int $max = 12): array
{
    $array = [];
    for ($i = 0; $i < $length; $i++) {
        $array[] = rand($min, $max);
    }

    return $array;
}

$new_Array = generate_array();
show_message("Max is " . max($new_Array));
show_message("Min is " . min($new_Array));

sort($new_Array);
print_r($new_Array);
