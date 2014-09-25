<?php
session_start();
/*
 * Handle the contact page process
 */
if($_POST['messagesent'] == 'Send'){
// Collect the data
$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Validate the data
if(empty($first) || empty($last) || empty($email) || empty($subject) ||
empty($message)){
$errors[1] = 'All fields are required.';
}

if($_SESSION['security_code'] != $_POST['cap_code'] &&
!empty($_SESSION['security_code'])) {
$errors['security'] = 'Sorry, your entered security code does not match
the security image.';
} // If you were getting a blank page it is because this right curly brace was in the wrong place. Put it before this comment, as shown.
// If there are errors send them back to the contact page to be fixed
if(!empty($errors)){
include 'contact.php';
exit;
 } else {
 // If there are no errors proceed with sending the message

$to = 'hethington@gmail.com'; // Note: the BYUI mail server is treating these as dangerous and not delivering them immediately. Send it to an off-campus email and it will work just fine.
$from = 'From: '.$email;
$fullname = $first.' '.$last;
$message .= "\n\n$fullname";
// Send the message and set a response
$result = mail($to, $subject, $message, $from);
if ($result){
$resultmessage = 'Thanks, your message has been sent.';
} else {
$resultmessage = 'Sorry, the message could not be sent.';
}

// Clear the variables before sending the result message back
unset($first);
unset($last);
unset($email);
unset($subject);
unset($message);

// Go back to the contact page to inform the message sender of theresult
include 'contact.php';
exit;
}
// } There was a curly brace here, it should have been on line 23. Get ridof this one.
} else {
include 'contact.php';
exit;
}