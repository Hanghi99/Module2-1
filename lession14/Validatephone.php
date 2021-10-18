<?php
function Checkphone($phone){
    $Checkphone ="/^\([0-9]{2}\)\-\(0[0-9]{9}\)$/";
   
        if (preg_match($Checkphone,$phone)){
            echo "Valid phone ";
        }
        else {
            echo "Invalid phone";
        }
   
}
Checkphone("(84)-(0978489648)");
echo '</br>';
Checkphone("(a8)-(22222222)");
