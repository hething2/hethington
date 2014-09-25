<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
    <title>Account</title>
    <meta charset="UTF-8">
    <meta name="name" contents="Harold Ethington">
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
                <form method="post" action=".">
                    <label for='uId'>Please enter a user ID number: </label>
                    <input type='int' name='uId' id='uId' required>
                    <input type="submit" name="submit" value="submit">              
                </form>
                 </div>
  <footer>
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>

  </footer>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="../jvs/jquery.validate.min.js"></script>
         <script src="../jvs/registrationrules.js"></script>
  </body>
</html>