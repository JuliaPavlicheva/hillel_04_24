<?php

echo "Hello! What's your name?\n";
$user_name = trim(fgets(STDIN));
echo "$user_name, how old are you?\n";
$user_age = trim(fgets(STDIN));
echo "Nice to meet you, $user_name, $user_age years old. Hope your day is great :)\nPlease enter 2 of your favorite numbers. The first is...\n";
$first_number = floatval(trim(fgets(STDIN)));
echo "The second is... \n";
$second_number = floatval(trim(fgets(STDIN)));
$sum = $first_number + $second_number;
$average = $sum / 2;
echo "The sum of your favorite numbers is $sum, and average is $average.\n";





