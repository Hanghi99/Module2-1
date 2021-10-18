<?php
class FizzBuzz {
public $name;
public function __construct(int $number)
{
    $isFizz = $number % 3 == 0;
    $isBuzz = $number % 5 == 0;

    if ($isFizz && $isBuzz) {
        $this->status = "FizzBuzz";
    } elseif ($isFizz) {
        $this->status = "Fizz";
    } elseif ($isBuzz) {
        $this->status = "Buzz";
    } else {
        $this->status = $number . "";
    }
}
public __toString ()
{
    return $this->number = ts_number ;
    
}
}
$fizzBuzz = new FizzBuzz( 15 );
echo  $fizzBuzz-> toString() ;