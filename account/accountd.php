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
    <h1>Information</h1>
    
      <form method="post" action=".">
     
      <label for="email">Email:</label>
      <input type="email" name="email" id="email"  required>
      <label for="submit">&nbsp;</label>
      <input type="submit" name="delete" value="Send It">
    </form>
            </div>
  <footer>
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>

  </footer>
        </div>
  </body>
</html>