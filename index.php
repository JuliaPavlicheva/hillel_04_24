<?php

require_once __DIR__ . '/Text.php';
require_once __DIR__ . '/UpperText.php';

try {
    $new_text = new Text('some text');
    $new_upper_text = new UpperText('some text');

    var_dump($new_text->print_text());
    var_dump($new_upper_text->print_text());
} catch (Exception $exception) {
//    echo $exception->getMessage() . PHP_EOL;
} finally {
//    echo 'Finally!' . PHP_EOL;
}

