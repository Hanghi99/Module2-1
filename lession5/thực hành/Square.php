<?php
namespace Square;
use Rectangle\Rectangle;
class Square extends Rectangle
{
    public function __construct(string $ts_name, int $ts_width)
    {
        parent::__construct($ts_name, $ts_width, $ts_width);
    }
}