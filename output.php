<?php 

    // $dbName = 'prince';
    // $dbEmail = 'abc@gmail.com';

    $localUser = $_REQUEST['name'];
    $localEmail =  $_REQUEST['email'];

    // if ($dbName == $localUser && $dbEmail == $localEmail) {
    //     echo 'done';
    // }else{
    //     echo 'Not Done';
    // }


?>

<!-- ==================== Location ============================ -->

<?php 

    if ($localUser == "google") {
        header("location:https://www.google.com/");
    }else{
        echo 'Not Done';
    }
    

?>