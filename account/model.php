<?php

require $_SERVER['DOCUMENT_ROOT'] . "/conns/guitar1.php";

function insertPerson($firstname, $lastname, $email, $password) {
    global $db;
    global $link;
    global $userid;
    $link->beginTransaction();
    $flag = TRUE;
    try {

        $sql = "INSERT INTO $db.people
        (peoFirst, peoLast, peoEmail) 
         VALUES (:peoFirst, :peoLast, :peoEmail)";
        $stmt = $link->prepare($sql);

        $stmt->bindValue(':peoFirst', $firstname, PDO::PARAM_STR);
        $stmt->bindValue(':peoLast', $lastname, PDO::PARAM_STR);
        $stmt->bindValue(':peoEmail', $email, PDO::PARAM_STR);
        $stmt->execute();

        $userid = $link->lastInsertId();
        $stmt->closeCursor();
    } catch (PDOException $e) {
        return 0; // indicates failure
    }
    if ($userid < 1) {
        $flag = FALSE;
       
    }

    if ($flag) {
        try {


            $sql = "INSERT INTO $db.credentials (credPassword, peoID) VALUES (:credPassword, :peoID)";

            $stmt = $link->prepare($sql);

            $stmt->bindValue('credPassword', $password, PDO::PARAM_STR);
             $stmt->bindValue('peoID', $userid, PDO::PARAM_STR);
            $stmt->execute();


            $rowcount = $stmt->rowCount();

            $stmt->closeCursor();
            //return $rowcount;
        } catch (PDOException $e) {

            $flag = FALSE;
            echo 'pdo error 2';
        }
    }
    if ($rowcount != 1) {
        $flag = FALSE;
    }

    if ($flag) {
        $link->commit();
        echo $userid;
        return 1 . $userid;
    } else {

        $link->rollback();
        return 0;
    }
}
?>

