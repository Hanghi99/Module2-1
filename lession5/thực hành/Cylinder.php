<?php
namespace Cylinder;
use Circle\Circle;
class Cylinder extends Circle 
{
    public int $height;
    public function __construct(string $ts_name, int|float $ts_radius, int $ts_height)
    {
        parent :: __construct($ts_name, $ts_radius);
        $this->height = $ts_height;
    }
    public function calculateArea(): int|float
    {
        return parent::calculateArea()*2 + parent::calculatePerimeter()* $this->height;
    }
    public function calculateVolume(): int|float {
        return parent::calculateArea()* $this->height;
    }
}