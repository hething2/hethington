<!DOCTYPE html>
<html>
  <head>
    <title>PHP Basics</title>
    <meta charset="UTF-8">
    <meta name="author" contents="Harold Ethington">
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
    <header>
      <h1>PHP Basics</h1>
    </header>
  <main>
    <h1>Input Form</h1>
   
      <form method="post" action=".">
      <label for="firstname">First Name:</label>
      <input type="text" name="firstname" id="firstname">
      <label for="lastname">Last Name:</label>
      <input type="text" name="lastname" id="lastname">
      <label for="url">URL:</label>
      <input type="url" name="url" id="url">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email">
      <label for="submit">&nbsp;</label>
      <input type="submit" name="submit" value="Send It">
    </form>
  </main>
  <footer>
    <p>21 October, 2013</p>
  </footer>
  </body>
</html>
