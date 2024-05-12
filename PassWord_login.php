

<?php  

    $userName = $_REQUEST['user'];
    $userPass = $_REQUEST['userPass'];

    $countPass = strlen($userPass); // strlen : number count kora hoi

    if (!($countPass >= 5 && $countPass <= 10)) {
        header("location:index.php?wrongPass=Your PassWord is = $userPass.");
    }else{
        echo("Perfect");
    }





?>