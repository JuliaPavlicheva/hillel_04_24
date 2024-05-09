<?php
declare(strict_types=1);

class ResultsPrinter
{
    public function showResult(float|int|string $result): void
    {
        echo $result . PHP_EOL;
    }
}