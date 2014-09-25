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

    <h1>Update user</h1>

    

      <form method="post" action=".">

      <label for="firstname">First Name:</label>

      <input pattern=".{3,256}" title="3 characters minimum" type="text" name="firstname" id="firstname" required>

      <label for="lastname">Last Name:</label>

      <input pattern=".{3,256}" title="3 characters minimum" type="text" name="lastname" id="lastname" required>

     

      <label for="password">Password:</label>


      <input pattern=".{3,256}" title="3 characters minimum" type="password" name="password" id="password"  required>

      

      <label for="email">Email:</label>

      <input pattern=".{3,256}" title="3 characters minimum" type="email" name="email" id="email"  required>

      

      <label for="submit">&nbsp;</label>

      <input type="submit" name="submit" value="Send It">

      <a href="/account/acctdel/">Delete Account</a>

      <a href="/account/select/">View by User ID</a>

    </form>

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