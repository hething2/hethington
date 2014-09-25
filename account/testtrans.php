<?php

function writeClient($fname, $lname, $email, $item, $interest) {
  global $link; // The server connection
  global $db; // The database name

  $link->beginTransaction();
  $flag = TRUE;

  try {
// Insert the first 3 variables using a prepared statement
    $sql = "INSERT INTO $db.users 
         (user_first, user_last, user_email) 
         VALUES (:first, :last, :email)";

    $stmt = $link->prepare($sql);
    $stmt->bindValue(':first', $fname, PDO::PARAM_STR);
    $stmt->bindValue(':last', $lname, PDO::PARAM_STR);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->execute();

// Determine if the insert worked
// by getting the primary key created by the insert
    $userid = $link->lastInsertId();
    $stmt->closeCursor();
  } catch (PDOException $e) {
    return 0; // indicates failure
  }

// Change flag if the insert failed
  if ($userid < 1) {
    $flag = FALSE;
  }

// If flag is still true, attempt the second insert
  if ($flag) {
    try {
// Write the other variables and the primary 
// key from the first table to the second table
      $sql = "INSERT INTO 
         $db.interest(int_item, int_interest, peo_id) 
         VALUES (:item, :interest, :peopleid)";

      $stmt = $link->prepare($sql);
      $stmt->bindValue(':item', $item, PDO::PARAM_STR);
      $stmt->bindValue(':interest', $interest, PDO::PARAM_STR);
      $stmt->bindValue(':peopleid', $userid, PDO::PARAM_INT);
      $stmt->execute();
      $rowcount = $stmt->rowCount(); //How many rows were added
      $stmt->closeCursor();
    } catch (PDOException $e) {
            // set flag to false indicating the insert 
            // could not be completed
            $flag = FALSE;
            echo 'pdo error 2';
        }
    }

    if ($rowcount != 1) {
        $flag = FALSE; //The insert failed
    }

    // Check if flag is true
    if ($flag) {
        // Make all inserts permanent
        $link->commit();
        return 1; // A successful registration
    } else {
        // The flag is false, get rid of any 
        // inserted data from the transaction
        $link->rollback();
        return 0; // A failed registration
    }
}

// End of function
?>
