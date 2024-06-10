
<!-- Cookies and session -->


<!-- Cookies -->

<?php

    $name = "user";
    $value = "nirob";

    setcookie($name,$value, time()+20);

    if(isset($_COOKIE['user'])){
        echo "value Is : {$_COOKIE['user']}"; 
    }else{
        echo "Cookie is not save";
    }

?>




<!-- session -->

<?php 

session_start();

$_SESSION['user'] = "Prince";


?>