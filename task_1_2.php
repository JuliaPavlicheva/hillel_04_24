<?php
declare(strict_types=1);

function show_message(int|float $message): void
{
    echo $message . PHP_EOL;
}

function power1(int|float $number, int $power_number = 2): int|float
{
    return $number ** $power_number;
}

$result_power1 = power1(2, 3);
show_message($result_power1);

function power2(int|float &$number, int $power_number = 2): void
{
    $number = $number ** $power_number;
}

$result_power2 = 9;
power2($result_power2);
show_message($result_power2);

function calculate_square1(int|float $radius): int|float
{
    return pi() * $radius ** 2;
}
show_message(calculate_square1(7));

function calculate_square2(int|float &$radius): void
{
    $radius = pi() * $radius ** 2;
}
$radius2 = 2;
calculate_square2($radius2);
show_message($radius2);



