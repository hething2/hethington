<?php



$server = 'localhost';

$dbname= 'articles';

$username = 'user';

$password = 'user';

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

