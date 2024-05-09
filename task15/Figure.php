<?php
declare(strict_types=1);
abstract class Figure
{
    abstract public function area(): float|int;
    abstract public function perimeter(): float|int;
}