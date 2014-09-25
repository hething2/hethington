<?php

$server = 'localhost';
$dbname= 'toonedoo_guitar1';
$username = 'toonedoo_admin';
$password = 'peluchin7*';
$dsn = 'mysql:host='.$server.';dbname='.$dbname;
echo 'it worked';

// Now create the actual connection object and assign it to a variable
try {
$link = new PDO($dsn, $username, $password);
} catch(PDOException $e) {
   header('Location: /errordocs/500.html');
   
   exit;
}

?>
