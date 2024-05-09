<?php
declare(strict_types=1);

class Circle extends Figure
{
    private float $radius;

    /**
     * @throws Exception
     */
    public function __construct(float|int $radius)
    {
        if ($radius <= 0) {
            throw new Exception("Invalid radius");
        }
        $this->radius = $radius;
    }

    public function area(): float|int
    {
        return M_PI * pow($this->radius, 2);
    }

    public function perimeter(): float|int
    {
        return 2 * M_PI * $this->radius;
    }

    public function getArea(): float|int
    {
        return $this->area();
    }

    public function getPerimeter(): float|int
    {
        return $this->perimeter();
    }

    public function getCircleData(): string
    {
        return 'Radius - ' . $this->radius . PHP_EOL .
            'Area - ' . $this->area() . PHP_EOL .
            'Perimeter - ' . $this->perimeter() . PHP_EOL;
    }
}