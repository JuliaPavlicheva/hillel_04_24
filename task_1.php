<?php
declare(strict_types=1);

function show_message(int $message): void
{
    echo $message . PHP_EOL;
}

$i = 1;
$factorial = 1;

//while ($i <= 10) {
//    show_message($i);
//    $i++;
//}

//while ($i <= 5) {
//    $factorial *= $i;
//    $i++;
//}
//
//show_message($factorial);

while ($i <= 20) {
    if ($i % 2 == 0) {
        show_message($i);
    }
    $i++;
}

