<?php
//library of custom functions

// Render input as a string
function valString($string){
    $string = filter_var($string, FILTER_SANITIZE_STRING);
    return $string;
}
// check for a double or int
function valNumber($number){
    $number = filter_var($number, FILTER_SANITIZE_NUMBER_FLOAT, 
            FILTER_FLAG_ALLOW_FRACTION);
    $number = filter_var($number, FILTER_VALIDATE_FLOAT);
    return $number;
}
// Check for an email address
function valEmail($email){
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo 'Librayr';
    return $email;
}
?>
