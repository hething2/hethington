<?php
 
  require $_SERVER['DOCUMENT_ROOT'] . '/conns/guitar1.php';
  function deletePerson($email){
// The $db and $link variables are declared in the 
// dbconnection file.
// Use of 'global' makes them available within this 
// function by adding them to the function scope

global $db;
global $link;


  // Write the SQL query using named parameters (:name)
  // The database name is prepended to the table name
  // The database name is declared in the connection object

  // Run everything in a Try - Catch to handle 
  // any exceptions that may occur
echo "model worked";
try{
    
  $sql = "DELETE FROM $db.people 
           
         WHERE peoEmail = ?";

  // Initialize the prepared statement
  $stmt = $link->prepare($sql);

/* Next, fill in the real values for the named 
    * parameters using a bindValue() function.
    * This function serves two purposes: 
    * 1) it provides the real values in place of the 
    * named parameters and 
    * 2) It indicates the type of data of the values. 
    */
   
   $stmt->bindValue(':peoEmail', $email, PDO::PARAM_STR);
   

// Run the insert
   $stmt->execute();

// Retrieve the primary key created by the 
   // last interaction
   // The result should be greater than 1
    $count = $link->lastInsertId();
    
   $stmt->closeCursor(); // closes the prepared statement
  
} catch (PDOException $e) {
    
    
// If there is an error, set the value of $count 
   // to zero, indicating failure
   $count = 0;
}

 // If $count is greater than or equal to 1 the 
    // insert worked, if not it failed
    if ($count >= 1) {
  // it worked
     return 1; // 1 is the equivalent of TRUE
    } else {
  // it failed
     return 0; // 0 is the equivalent of FALSE
    }
   } // Close the custom function
  ?>

