
<?php
class Circle
{
    public  $name;
    public  $radius;
    public $color;
    public function __construct( $ts_name,$ts_radius, $ts_color)
    {
       $this->name = $ts_name;
        $this->radius = $ts_radius;
        $this->color = $ts_color;
    }
    function setname($ts_name){
        $this->name = $ts_name;
    }
    function setcolor($ts_color){
        $this->color = $ts_color;
    }
    function setradius($ts_radius){
        $this->radius = $ts_radius;
    }
    function getname(){
        return $this->name;
    }
    function getcolor(){
        return $this->color;
    }
    function getradius(){
        return $this->radius;
    }
    public function calculateArea()
    {
        return pi() * pow($this->radius,2);
    }
    public function calculatePerimeter()
    {
        return pi() * $this->radius *2 ;
    }
    public function toString(){
        echo "Tên:".$this->name;
        echo "<br/>";
        echo "Màu :".$this->color;
        echo "<br/>";
        echo "bán kính :".$this->radius;
    }
}
class Cylinder extends Circle 
{
    public$height;
    public function __construct ($ts_name, $ts_radius,$ts_color, $ts_height)
    {
        parent :: __construct($ts_name, $ts_radius,$ts_color);
        $this->height = $ts_height;
    }
    function setheight($ts_height){
                $this->height =$ts_height;
            }
    function getheight(){
                return $this->height;
            }
    public function calculateArea()
    {
        return parent::calculateArea()*2 + parent::calculatePerimeter()* $this->height;
    }
    public function calculateVolume() {
        return parent::calculateArea()* $this->height;
    }
    function toString(){
                echo "Tên:".$this->name;
                echo "<br/>";
                echo "Màu :".$this->color;
                echo "<br/>";
                echo "bán kính :".$this->radius;
                echo "<br/>";
                echo "Chiều cao:".$this->height;
            }
}
$circle = new Circle('Circle 01', 3,'blue');
echo 'Circle area: ' . $circle->calculateArea() . '<br />';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';
echo $circle->toString();
echo "<hr/>";
$cylinder = new Cylinder('Cylinder 01', 3,'red', 4);
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';
echo $cylinder->toString();