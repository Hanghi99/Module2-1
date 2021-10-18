<?php
class Point2D {
    public float $x;
    public float $y;
    public function __construct (float $ts_x, float $ts_y){
        $this->x = $ts_x;
        $this->y = $ts_y;
    }
    function getx(): float {
         return $this->x;
        }
    function gety(): float {
         return $this->y;
        }
        function setx($ts_x): void {
            $this->x= $ts_x;
        }
        function sety($ts_y): void {
            $this->y= $ts_y;
        }
        function setxy(float $ts_x, float $ts_y): void {
            $this->x= $ts_x;
            $this->y= $ts_y;
         
        }
        function getxy(){
            $arr = array($this->x,$this->y);
            return $arr;
    
        }
        function toString(){
            echo $this->x;
            echo "<br/>";
            echo $this->y;
        }
}
class Point3D extends Point2D {
    public float $y;
    public function __construct (float $ts_x, float $ts_y,float $ts_z){
       parent::__construct($ts_x,$ts_y);
       $this->z= $ts_z;
    }
    function setz(float $ts_z){
        $this->z= $ts_z;
    }
    function getz(): float {
        return $this->z;

    }
    function setxyz(float $ts_x, float $ts_y, float $ts_z): void{
        $this->x= $ts_x;
        $this->y= $ts_y;
        $this->z= $ts_z;
    }
    function getxyz(){
        $arr = array($this->x,$this->y,$this->z);
        return $arr;
    }
    function toString(){
        echo $this->x;
        echo "<br/>";
        echo $this->y;
        echo "<br/>";
        echo $this->z;
    }

}
$point2 = new Point2D(2,5);
echo $point2->toString();
echo "<hr/>";
$point3 = new Point3D(3,4,8);
echo $point3->toString();

?>