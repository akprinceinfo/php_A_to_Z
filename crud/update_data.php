


<?php 

    //Database connect
    $conn = mysqli_connect("localhost","root","","user_info");
                
    if(!$conn){
        die("not connect" . mysqli_error($conn));
    }


    if (isset($_REQUEST['submit'])) {
        $userName = $_REQUEST['name'];
        $userEmail = $_REQUEST['email'];
        $userPassword = $_REQUEST['password'];
        $hiddenId = $_REQUEST['update_hidden_id_pass'];

        $updateQuery = "UPDATE ditels_table SET name='$userName',email='$userEmail',password = '$userPassword' WHERE id ='$hiddenId'";

        $final_connection = mysqli_query($conn,$updateQuery);

        if ($final_connection) {
            header("location:formView.php?updateData");
        }
    }

?>
