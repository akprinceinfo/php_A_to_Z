

<?php 
    
    
    if(isset($_REQUEST['submit'])){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];


        //condition Use
        if ($name != "" && $email && $password) {
            //Database connect
            $conn = mysqli_connect("localhost","root","","user_info");
            
            if(!$conn){
                die("not connect" . mysqli_error($conn));
            }

            $queryDataSend = "INSERT INTO ditels(userName,email,password) VALUES ('$name' ,'$email','$password')";

            $dbConnect = mysqli_query($conn, $queryDataSend);

            if (!$dbConnect) {
                die("Not Success" . mysqli_error());
            }else{
                echo "Success";
            }
        }
    }

    

    // $query = "SELECT * FROM ditels"

   
   
    
    
    




?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <form action="" method="POST">
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">User Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form> 
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
