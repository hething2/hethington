<?php
// At the top of the web page that uses the captcha be sure to have
// a PHP code block that creates a session, see the next line
// Also, if using a separate controller, put this at the top of it (also inside the PHP code block)
session_start();

// Also include a check to compare what the user typed to what was 
// shown in the captcha image

// The name in the POST object is the name of the input the user types their answer into in the form. The name in the SESSION must be left as shown unless you altered the name to be used in the captcha_images.php file

 if($_SESSION['security_code'] != $_POST['cap_code'] && !empty($_SESSION['security_code'])) {
  $errors['security'] = 'Sorry, your entered security code does not match the security image.';
 }

?>

In the web page form, include two inputs: one to show the captcha image 
and a second that the user types in what they see, see the examples below:

The value of the src must include the path to the captcha_images.php file. In the same location needs to be stored the font file to be used

<!-- This displays the captcha image -->
<label>&nbsp;</label><img id="captcha" src="captcha_images.php?width=100&amp;height=40&amp;characters=5" alt="captcha image"> (Type these characters into the text box below)

<!-- This allows the user to type in what they see -->
<label for="cap_code">Security Code:</label><input id="cap_code" name="cap_code" type="text" size="6">

