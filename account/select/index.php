<?php

 include 'model.php';
 if ($_POST['submit']){

     $uId = $_POST['uId'];
     $user = getUser($uId);
     
     include 'select.php';
     if ($user == TRUE){        
                      echo $user[0]; echo $user[1]; 
        exit;
     
     } else {
        echo ' Submit failed';
        

        include 'select.php';
        exit;
    }

} else {
   
    include 'select.php';
}     
?>
