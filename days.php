<?php

$days = array("Monday","Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
$today = $days[4];

$firstName;

if(isset($_POST['firstName'])){
    $firstName = $_POST['firstName'];
} else if (isset($_GET['firstName'])){
    $firstName = $_GET['firstName'];
}
?>
