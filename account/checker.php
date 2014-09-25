<?php

$formsubmit = clean($_POST['submit']);
if ($formsubmit == 'Add Person') {
    
}
$problems = array();
 $firstname = clean($_POST['firstname']);
 $lastname = clean($_POST['lastname']);
 $url = clean($_POST['url']);
 $email = clean($_POST['email']);  
 if (empty($firstname)) {
  $problems['name'] = 'The first name must be supplied';
 }
 if (empty($lastname)) {
  $problems['name'] = 'The last name must be supplied';
 }
 if (empty($url)) {
  $problems['name'] = 'The web address must be supplied';
 }
  if (empty($email)) {
  $problems['name'] = 'The email must be supplied';
 }
 if (!empty($problems)) {
  exit;
 }
  if(empty($problems)) {
      // require $_SERVER['DOCUMENT_ROOT'] . '/conns/guitar1.php';
      $insertresult = insertPerson($firstname, $lastname, $email, $url);
      
if ($insertresult == TRUE) {
     // it worked
     include 'model.php';
     $message = "The insertion worked. Thanks for registering";
     include 'success.php';
     exit;
    } else {
     // it failed
     $message = "Sorry, you were not registered due to an error.";
     include 'error.php';
     exit;
    }
    function clean($submit){
        return $submit;
  }
  }
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
