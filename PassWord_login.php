

<?php  

//     $userName = $_REQUEST['user'];
//     $userPass = $_REQUEST['userPass'];

//     $countPass = strlen($userPass); // strlen : number count kora hoi

//     if (!($countPass >= 5 && $countPass <= 10)) {
//         header("location:index.php?wrongPass=Your PassWord is = $userPass.");
//     }else{
//         echo("Perfect");
//     }

// ?>


<!-- ================ Password Encryption and Security =========09=========== -->
<?php  

    $userName = $_REQUEST['user'];
    $userPass = $_REQUEST['userPass'];

    $hash_formet = "$2y$08$";  //02 = password janarator time
    $salt = "qwertyuidsasdf76543221wqsdfgh";
    $con = $hash_formet . $salt ;

    echo crypt($userPass , $con);
   

?>