<?php


class Cylinder 
{
    public function getVolume($radius, $height)
    {
       $baseArea  = $this->getArea($radius);
       $perimeter = $this->getMeter($radius);
        $volume = $perimeter * $height + 2 * $baseArea;
        return $volume;
    
    }
    public function getArea($radius)
    {
        $baseArea = pi() * $radius * $radius;
        return $baseArea;
    }
    public function getMeter($radius)
    {
        $perimeter = 2 * pi() * $radius;
        return $perimeter;
    }

}
$cylinder = new Cylinder();
echo " thể tích là :" . $cylinder->getVolume(4,6);
