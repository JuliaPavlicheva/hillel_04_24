<?php
declare(strict_types=1);

function show_message(int $message): void
{
    echo $message . PHP_EOL;
}
function generator(int $max_number): Generator
{
    $prev_number = 0;
    $current_number = 1;

    while ($current_number < $max_number) {
        yield $current_number;
        $additional_number = $current_number;
        $current_number += $prev_number;
        $prev_number = $additional_number;
    }
}

$generator = generator(30);
foreach ($generator as $value) {
    show_message($value);
}