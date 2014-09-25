<?php

include 'update.php';
// The key and value for 'updateId' is passed through the POST
// and is the primary key for that record being updated
if(!empty($_POST['updateid'])) {


// Get the value from the POST,
   // validate it, then assign to variable
$updateid = (int) clean($_POST['updateId']);

// Collect and assign values from the form to variables
$userid = (int) clean($_POST['updateId']);
$fname = clean($_POST['txtfname']);
$lname = clean($_POST['txtlname']);
$email = clean($_POST['emailaddress']);
$password = clean($_POST['pswd']);

/* ** Server-side validation would be here ** */

/* ** If no validation errors proceed with update ** */
if(empty($errors)){
// The password is treated carefully, 
   // we only deal with it if the user entered a new one
if(!empty ($password)){
 $password = sha1($password); // hash the password
 }

// Call the function in the model to perform the update
$updateresult = updateData($userid, $fname, $lname, $email, $password);

// $updateresult should receive either a "1" meaning success 
   // or "0" for failure from the model

   if($updateresult) {
     // The update worked
     $message = 'The update was successful.';
     include 'notify.php';
     exit;
   } else {
     // The update failed
     $message = 'Sorry, The update failed.';
     include 'notify.php';
     exit;
   }
}
}
 ?>