<?php

function Checkemails($email){
    $Checkemail= '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if(preg_match($Checkemail,$email)) {
        echo("Valid email account");
    } else {
        echo("Invalid email account ");
    }

}
Checkemails("Codegym@gmail.com");
