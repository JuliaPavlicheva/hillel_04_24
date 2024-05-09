<?php
declare(strict_types=1);

class Rectangle extends Figure
{
    private float|int $length;
    private float|int $width;

    /**
     * @throws Exception
     */
    public function __construct(float|int $length, float|int $width)
    {
        if ($length <= 0 || $width <= 0) {
            throw new Exception("Invalid length or width");
        }
        $this->length = $length;
        $this->width = $width;
    }

    public function area(): float|int
    {
        return $this->length * $this->width;
    }

    public function perimeter(): float|int
    {
        return 2 * ($this->length + $this->width);
    }

    public function getArea(): float|int
    {
        return $this->area();
    }

    public function getPerimeter(): float|int
    {
        return $this->perimeter();
    }

    public function getRectangleData(): string
    {
        return 'Length - ' . $this->length . PHP_EOL .
            'Width - ' . $this->width . PHP_EOL .
            'Area - ' . $this->area() . PHP_EOL .
            'Perimeter - ' . $this->perimeter() . PHP_EOL;
    }
}