<?php
namespace Rectangle;
use Shape\Shape;
class Rectangle extends Shape 
{
    public int $height;
    public int $width;
    public function __construct(string $ts_name, int $ts_width, int $ts_height){
        parent :: __construct($ts_name);
        $this->height = $ts_height;
        $this->width = $ts_width;
    }
    public function calculateArea(): float|int
    {
        return $this->height * $this->width;
    }
    public function calculatePerimeter(): int|float
    {
        return ($this->height + $this->width)*2 ;
    }
}