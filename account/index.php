

<?php



include $_SERVER['DOCUMENT_ROOT'] . '/account/model.php';

include $_SERVER['DOCUMENT_ROOT'] . '/account/clean.php';
if ($_POST['submit']) {


    $firstname = valString($_POST['firstname']);

    $lastname = valString($_POST['lastname']);



    $email = valEmail($_POST['email']);

    $password = valString($_POST['password']);

    //sanEmail($email);



    $flag = insertPerson($firstname, $lastname, $email, $password);

  







    if ($flag == TRUE) {



        include 'success.php';

        echo $userid;

        exit;

    } else {

        echo $flag . ' Submit failed';



        include 'account.php';

        exit;

    }



    function sanEmail($email) {

        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        return $email;

    }



} else {

    include 'account.php';

}

?>