<?php
session_start(); 
if ($_POST["submit"]){
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $url = $_POST["url"];
  $email = $_POST["email"];  
  
      $form = array("firstname"=>$firstname,"lastname"=>$lastname,
          "url"=>$url, "email"=>$email);
          include 'basics.php';
          exit;
}else{
    include 'basics.php';
  
}
?>