<?php
class QuadraticEquation{
    public function __construct($ts_a,$ts_b,$ts_c){
        $this->a= $ts_a;
        $this->b= $ts_b;
        $this->c= $ts_c;


    }
    function geta(){
        return $this->a = $ts_a;

    }
    function getb(){
        return $this->b = $ts_b;

    }
    function getc(){
        return $this->c = $ts_c;

    }
    function getDiscriminant(){
        return $delta = ($this->b * $this->b)-4*$this->a*$this->c ;
    }
    function  getRoot1() 
    {
       $delta= $this->getDiscriminant();
       return  ((- $this->b) + sqrt($delta)) / (2 * $this->a);
    }
    function  getRoot2() 
    {
       $delta= $this->getDiscriminant();
        return ((- $this->b) - sqrt($delta)) / (2 * $this->a);
    }
    function total()
    {
        $delta= $this->getDiscriminant();
        $root1 = $this-> getRoot1();
        $root2 = $this-> getRoot2();
        if ($delta < 0)
        {
            echo " phương trình vô nghiệm";
        }elseif($delta == 0)
        {
            echo "phương trình có 1 nghiệm =" . $root1;
        }else{
            echo "phương trình có 2 nghiệm " . $root1 . ' ' . $root2 ;
        }
    }  
 }
 $quadraticequation = new QuadraticEquation(1,3,1);

 echo $quadraticequation->getDiscriminant();
 echo "<br>";
 echo $quadraticequation->getRoot1();
 echo "<br>";
 echo $quadraticequation->getRoot2();
 echo "<br>";
 echo $quadraticequation->total();

    
