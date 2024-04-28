<?php
declare(strict_types=1);

require_once __DIR__ . '/functions/functions.php';

show_message("Hi, how many lines do you want to add? \n");
$lines_amount = intval(trim(fgets(STDIN)));

if(0 !== $lines_amount) {
    for ($i = 1; $i <= $lines_amount; $i++) {
        show_message("Please, enter line #$i\n");
        $user_message = trim(fgets(STDIN));
        file_writer('log.txt', $user_message);
    }

    show_message("All lines were added successfully!\nCheck them below:\n");
    show_message(file_reader('log.txt', $lines_amount));
} else {
    show_message("Nothing to add! Try again :)\n");
}
