<?php 

    //Database connect
    $conn = mysqli_connect("localhost","root","","user_info");
                
    if(!$conn){
        die("not connect" . mysqli_error($conn));
    }

     $recvId = $_REQUEST['id'];
     $DBiamgeName = $_REQUEST['DBiamgeName'];

     $query = "DELETE FROM ditels WHERE id = $recvId";

     $run_delete_query = mysqli_query($conn,$query);

    if ($run_delete_query) {
        unlink("image/$DBiamgeName"); // folder image delete
        header("location:formView.php?deleted");
    }

?>