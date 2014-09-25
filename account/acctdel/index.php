  <?php
    include $_SERVER['DOCUMENT_ROOT'] . '/account/acctdel/modeld.php'; 
if ($_POST['delete']){
    
  $email = $_POST['email'];  
            
           
              $deleteresult = deletePerson($email);
         if ($deleteresult == TRUE) {
             
             include 'successd.php';
             exit;
         }
         else{
             
            include 'accountd.php';
             exit;
         }
}
else{ include 'accountd.php';
}
?>
