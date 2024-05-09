<?php
declare(strict_types=1);

require_once __DIR__ . '/Figure.php';
require_once __DIR__ . '/Rectangle.php';
require_once __DIR__ . '/Circle.php';
require_once __DIR__ . '/ResultsPrinter.php';

try {
    $rectangle = new Rectangle(4, 2);
    $circle = new Circle(4);
    $printer = new ResultsPrinter();

    $printer->showResult($rectangle->getPerimeter());
    $printer->showResult($rectangle->getArea());
    $printer->showResult($rectangle->getRectangleData());

    $printer->showResult($circle->getPerimeter());
    $printer->showResult($circle->getArea());
    $printer->showResult($circle->getCircleData());
} catch (Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
} finally {
//    echo 'Finally!' . PHP_EOL;
}
