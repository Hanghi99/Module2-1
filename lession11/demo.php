
<?php
 $array = [1,2,3,1,5,1,6,8,1,6,7,5];
 $count = 0;
 $value = 5;
 for($i = 0; $i <count($array); $i++){
     if($array[$i]== $value){
         $count++;
     }
 }
 echo $value." xuất hiện ".$count;

