<?php

$server = 'localhost';
$dbname= 'toonedoo_cms';
$username = 'toonedoo_admin';
$password = 'peluchin07*';
$dsn = 'mysql:host='.$server.';dbname='.$dbname;
echo 'it worked';

// Now create the actual connection object and assign it to a variable
try {
   
$link = new PDO($dsn, $username, $password);
} catch(PDOException $e) {
   header('Location: ../errorDocs/500.html');
   
   exit;
}

?>
