<?php 
    
    session_start();

    $conn = mysqli_connect("localhost","root","","user_info");

    if(!$conn){
        die("not connect" . mysqli_error($conn));
    }

    if (isset($_REQUEST['submit'])) {
      $name =  $_REQUEST['name'];
      $pass =  $_REQUEST['pass'];

      $query = "SELECT * FROM ditels_table WHERE name ='$name' AND password ='$pass'";

      $add = mysqli_query($conn,$query);

      $rowCount = mysqli_num_rows($add);
      
      if ($rowCount) {

        $_SESSION['name'] = $name;
        $_SESSION['timeSend'] = time();

        header("location:wellcome.php");
      }else{
        echo "not connect";
      }

    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
<form action="" method="post">

    Name : <input type="text" name="name" id="">  </br></br>
    Pass : <input type="text" name="pass" id=""> 

    <input type="submit" value="Send" name="submit">

</form>
</body>
</html>