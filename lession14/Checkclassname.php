<?php 
function Checkclassname($name){
    $Checkname = "/^[CAP][0-9]{4}[GHIKLM]$/";
    if(preg_match($Checkname,$name)){
        echo "Valid class name";
    }
        else
        {
        echo "Invalid class name";
        }
    
}
Checkclassname('C0318G');
echo "</br>";
Checkclassname('M0318G');
echo "</br>";
Checkclassname('P0323A');
echo "</br>";