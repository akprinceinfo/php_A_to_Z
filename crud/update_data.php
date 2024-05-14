


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

        $updateQuery = "UPDATE ditels SET userName='$userName',email='$userEmail',password = '$userPassword' WHERE id ='$hiddenId'";

        $final_connection = mysqli_query($conn,$updateQuery);

        if ($final_connection) {
            header("location:formView.php?updateData");
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update data</title>
</head>
<body>
    
</body>
</html>