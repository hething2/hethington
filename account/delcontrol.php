  <?php
    include $_SERVER['DOCUMENT_ROOT'] . '/account/modeld.php'; 
if ($_POST["delete"]){
 echo "control worked";
  $email = $_POST["email"];  
            
           
              $deleteresult = deletePerson($email);
         if ($deleteresult == TRUE) {
             
             include 'successd.php';
             exit;
         }
         else{
             echo 'Submit failed';
            include 'accountd.php';
             exit;
         }
}
else{ include 'accountd.php';
}
?>
