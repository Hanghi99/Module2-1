<?php
function Checkaccount($account){
    $Checkaccount = "/^[_a-z0-9]{6,}$/";
    if(preg_match($Checkaccount,$account)) {
        echo("Valid account");
    } else {
        echo("Invalid account ");
    }
}
Checkaccount("123abc_");
echo '</br>';
Checkaccount("_abc123");
echo '</br>';
Checkaccount("______");
echo '</br>';
Checkaccount("123456");
echo '</br>';
Checkaccount("abcdefg");
echo '</br>';
Checkaccount(".@");
echo '</br>';
Checkaccount("12345");
echo '</br>';
Checkaccount("1234_");
echo '</br>';
Checkaccount("abcde ");
