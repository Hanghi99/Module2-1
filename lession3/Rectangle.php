<?php
class Rectangle{
    public function __construct($ts_width,$ts_height){
        $this->width = $ts_width;
        $this->height = $ts_height;

}
//Tính diện tích hình chữ nhật

public function getArea(){
    return $this->width * $this->height;

}
//Tính chu vi hình chữ nhật
 public function getPerimeter(){
    return (($this->width + $this->height)*2);
}
public function display()
{
    return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
}
}
$ts_width = 10;
$ts_height = 20;
$rectangle = new Rectangle($ts_width,$ts_height);
echo $rectangle->width;
echo '<br>';
echo $rectangle->height;
echo '<br>';
echo $rectangle->getPerimeter();
echo '<br>';
echo $rectangle->getArea();
echo '<br>';
echo("Your Rectangle".$rectangle->display());