<?php
namespace Shape;
class Shape
{
    public string $name;
    public function __construct(string $ts_name)
    {
$this->name = $ts_name;
    }
    public function show(): stream_set_blocking
    {
return  " I am a shape. My name is $this->name";
    }
}