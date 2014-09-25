<?php
// The connection object is assumed 
// to exist in scope
require $_SERVER['DOCUMENT_ROOT'] . '/conns/guitar1.php';
function getUser($uId){
 global $link; // The server connection
 global $db; // The database name

try {
// A sql statement to select data 
// from a table; includes a named 
// parameter - returns 1 record
 $sql = "SELECT peoFirst, peoLast 
 FROM $db.people 
 WHERE peoID = :peoID";

// Initialize the prepared statement
 $stmt = $link->prepare($sql);

// Bind the value and data type 
// to the named parameter 
 $stmt->bindValue(':peoID', $uId, PDO::PARAM_INT);

// Run the prepared statement
 $stmt->execute();

// Retrieve the data
 $user = $stmt->fetch();

// Close the prepared statement
 $stmt->closeCursor();
 
// See if data was returned or not,
// respond accordingly
 if(!empty($user)){
    
  return $user; // Data retrieved
 } else {
    
  return 0; // Nothing retrieved
 }
} catch (PDOException $e) {
  return 0; // indicates a failure
}
} // end function
?>