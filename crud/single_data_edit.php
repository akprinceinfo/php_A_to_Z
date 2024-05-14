
<?php 

    //Database connect
    $conn = mysqli_connect("localhost","root","","user_info");
                
    if(!$conn){
        die("not connect" . mysqli_error($conn));
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Data Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    
    <?php 
    
        if (isset($_REQUEST['edit_Id'])) {
            
            $receivedId = $_REQUEST['edit_Id'];

            $get_info = "SELECT * FROM ditels WHERE id = $receivedId ";

            $selectInfo =  mysqli_query( $conn, $get_info);

            while ($row = mysqli_fetch_assoc($selectInfo)) {
                
                
    ?>

        <div class="container">
            <form action="update_data.php" method="POST">
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">User Name:</label>
                    <input type="text" value="<?php echo $row['userName'] ?>" class="form-control" id="name" placeholder="Enter name" name="name">
                </div>
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" value="<?php echo $row['email']; ?>" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Password:</label>
                    <input type="password" value="<?php echo $row['password']; ?>" class="form-control" id="pwd" placeholder="Enter password" name="password">
                </div>
                
                <button type="submit" name="submit" class="btn btn-primary">update data</button>
                <input type="hidden" name="update_hidden_id_pass" value="<?php echo $receivedId ?>">
            </form> 
        </div>

    <?php

           }

       }
    
    ?>


    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>