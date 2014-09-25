<?php

// The database connection object must be present in the model
require $_SERVER['DOCUMENT_ROOT'] . '/conns/guitar1.php';
function editData($editid){
global $link; //This is the connection variable;
global $db; //This is the database name variable;

try {
 // Query db for info to match the primary key
  $sql = "SELECT usr_id, usr_fname, usr_lname, usr_email 
          FROM $db.users WHERE usr_id = :userid";
 
  $stmt = $link->prepare($sql);
  $stmt->bindValue(":userid", $editid);
  $stmt->execute();
  $edituser = $stmt->fetch();
  $stmt->closeCursor();
  return $edituser; // Send to controller
} catch (PDOException $e) {
  return NULL; // Send to controller
  }
}

function updateData($userid, $fname, $lname, $email, $password){
global $link;
global $db;

// IMPORTANT! Do not change the primary key in the database
 // Note: two different sql statements, one with the password 
 // and one without the password

try {
 if(!empty($password)){
 $sql = "UPDATE $db.users SET usr_fname=?, usr_lname=?, usr_email=?, usr_password=? 
         WHERE usr_id = :userid";
 } else {
  $sql = "UPDATE $db.users SET usr_fname=?, usr_lname=?, usr_email=? 
         WHERE usr_id = :userid";
 }

  $stmt = $link->prepare($sql);
  $stmt->bindValue(':userfirst', $fname);
  $stmt->bindValue(':userlast', $lname);
  $stmt->bindValue(':useremail', $email);
  if(!empty($password)){
  $stmt->bindValue(':userpassword', $password);
  } 
  $stmt->execute();
// rowCount() finds out the number of rows affected by 
      //the query, the result should be 1
  $updateSuccess = $stmt->rowCount();
  $stmt->closeCursor();
  return $updateSuccess;
  } catch (PDOException $e) {
   return 0;
  }
}
?>
