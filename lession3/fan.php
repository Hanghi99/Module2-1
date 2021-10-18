<?php
   // 3 thuộc tính hằng được đặt tên là SLOW, MEDIUM, và FAST với giá trị 1, 2, và 3 để biểu thị tốc độ quạt.
   const SLOW=1;
   const MEDIUM=2;
   const FAST=3;
class Fan{
 
// Thuộc tính speed có kiểu số nguyên và mức truy xuất là private để xác định tốc độ quạt, mặc định là SLOW
public int $speed ;
// Thuộc tính on có kiểu lô-gic và mức truy xuất private để xác định quạt đang bật hay tắt, mặc định là false (tắt).
public bool $on;
// Thuộc tính radius có kiểu thực và mức truy xuất private để xác định bán kính quạt, giá trị mặc định là 5
public float $radius;
// Thuộc tính color có kiểu dữ liệu là chuỗi và mức truy xuất private để xác định màu quạt, mặc định là "blue"
public string $color;
// phương thức chạy chính khi khởi tạo
public function __construct()
{
    $this->speed =SLOW;
    $this->on = false;
    $this->radius =5;
    $this->color = "blue";
}
// khởi tạo phương thức speed
function setspeed($ts_speed){
    $this->speed = "$ts_speed";
}
// khởi tạo phương thức on
function seton($ts_on){
    $this->on = "$ts_on";
}
//Khởi tạo phương thức radius
function setradius($ts_radius){
    $this->radius =$ts_radius;
}
//khởi tạo phương thức color
function setcolor($ts_color){
    $this->color ="$ts_color";
}
private function getspeed():int {
   return $this->speed;
}
private function geton():bool {
   return $this->on ;
}
private function getradius():float {
    return $this->radius ;
}
private function getcolor():string {
    return $this->color ;
}
// khởi tạo phương thức tostring 
public function __toString()
{
    if ($this->on == true)
    {
        return "<br/>" . "Fan is on" . "<br/>" . "Fan speed" . "<br/>" ."Fan running speed is: " . 
        $this->speed . "<br/>" . "Fan color: " . $this->color . "<br/>" . "Fan radius: " . $this->radius;
    }
    else
    {
        return "<br/>" . "Fan is off" . "<br/>" . "Fan speed" .
         "<br/>" . "Fan color: " . $this->color . "<br/>" . "Fan radius: " . $this->radius;
    }
}
}
// khởi tạo fan 
$fan = new Fan();
echo $fan;