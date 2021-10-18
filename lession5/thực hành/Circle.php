<?php
namespace Circle;
use Shape\Shape;
class Circle extends Shape
{
    public int|float $radius;
    public function __construct(string $ts_name, int|float $ts_radius)
    {
        parent :: __construct($ts_name);
        $this->radius = $ts_radius;
    }
    public function calculateArea(): int|float
    {
        return pi() * pow($this->radius,2);
    }
    public function calculatePerimeter(): int|float
    {
        return pi() * $this->radius *2 ;
    }
}