<?php

echo "Hello! Please, enter a random number\n";
$value = intval(trim(fgets(STDIN)));
//$value = 5;

// if / else
if ($value === 1) {
    $result = ("green\n");
} elseif ($value === 2) {
    $result = ("red\n");
} elseif ($value === 3) {
    $result = ("blue\n");
} elseif ($value === 4) {
    $result = ("brown\n");
} elseif ($value === 5) {
    $result = ("violet\n");
} elseif ($value === 6) {
    $result = ("black\n");
} else {
    $result = ("white\n");
}

// switch
switch ($value) {
    case 1:
        $result = "green\n";
        break;
    case 2:
        $result = "red\n";
        break;
    case 3:
        $result = "blue\n";
        break;
    case 4:
        $result = "brown\n";
        break;
    case 5:
        $result = "violet\n";
        break;
    case 6:
        $result = "black\n";
        break;
    default:
        $result = "white\n";
}

// match
$result = match ($value) {
    1 => "green\n",
    2 => "red\n",
    3 => "blue\n",
    4 => "brown\n",
    5 => "violet\n",
    6 => "black\n",
    default => "white\n",
};

echo $result;