<?php

$password = '12345678';

$password = hash($password);

function hash($password){
    $crypt = crypt($password, '$2a$25$usesomesillystringforsalt$') . "<br>";
    return $crypt;
}
?>