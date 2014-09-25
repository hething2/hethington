<!-- errors & messages --->

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

<form method="post" action="index.php" name="loginform">

    <label for="login_input_username">Username</label>
    <input id="login_input_username" class="login_input" type="text" name="user_name" required />

    <label for="login_input_password">Password</label>
    <input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required />

    <input type="submit"  name="login" value="Log in" />
    <a href="http://www.sandbox336.toonedoorrepair.com/CMS/admin.php">Admin login</a>

</form>
                <br>
                <?php

// show negative messages
if ($login->errors) {
    foreach ($login->errors as $error) {
        echo $error;    
    }
}

// show positive messages
if ($login->messages) {
    foreach ($login->messages as $message) {
        echo $message;
    }
}

?>
                <br>

<a href="register.php">Register new account</a>

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