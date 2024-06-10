<?php 
    session_start();

    


    if ($_SESSION['timeSend'] == true) {
        echo "wellcome " . $_SESSION['name'];

        if (time() - $_SESSION['timeSend'] > 5) {
            header("location:login.php");
        }else{
            echo "<a href='logout.php'>logout</a>";
        }

    }else{
        echo "not";
    }



?>


