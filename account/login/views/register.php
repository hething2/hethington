

<!DOCTYPE html>

<html>

  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>

    <title>Account</title>

    <meta charset="UTF-8">

    

    <style>

      label, input{

        display: block;

      }

      input{

        margin-bottom: 15px;

      }

    </style>

  </head>

  <body>

         <div id="page-wrap">

            

         <header id="page-header">

             <h1>Account Sign-up</h1>

                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>

         </header>

              <div class="box-wrap">

        <nav id="page-nav">

        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/nav.php'; ?>

        </nav><br>

        <br><div id="top-wrap">

            <div id="text">
                
<form method="post" action="register.php" name="registerform">   
    
    <!-- the user name input field uses a HTML5 pattern check -->
    <label for="login_input_username">Username (only letters and numbers, 2 to 64 characters)</label>
    <input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
    
    <!-- the email input field uses a HTML5 email type check -->
    <label for="login_input_email">User's email</label>    
    <input id="login_input_email" class="login_input" type="email" name="user_email" required />        
    
    <label for="login_input_password_new">Password (min. 6 characters)</label>
    <input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />  
    
    <label for="login_input_password_repeat">Repeat password</label>
    <input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />        
    <input type="submit"  name="register" value="Register" />
    
</form>
                <br>
                <?php

// show negative messages
if ($registration->errors) {
    foreach ($registration->errors as $error) {
        echo $error;    
    }
}

// show positive messages
if ($registration->messages) {
    foreach ($registration->messages as $message) {
        echo $message;
    }
}

?>

<!-- backlink -->
<br>
<a href="index.php">Back to Login Page</a>

 </div>

  <footer>

      <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>



  </footer>

        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

        <script src="../jvs/jquery.validate.min.js"></script>

         <script src="../jvs/registrationrules.js"></script>

              </div>

         </div>

  </body>

</html>