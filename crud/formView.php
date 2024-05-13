
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    

    
    <?php 

        //Database connect
        $conn = mysqli_connect("localhost","root","","user_info");
                
        if(!$conn){
            die("not connect" . mysqli_error($conn));
        }

        $query = "SELECT * FROM ditels";
        $connection = mysqli_query($conn , $query);
        $dataCount = mysqli_num_rows($connection);


        // Delete page data received
        if (isset($_REQUEST['deleted'])) {
           echo"<font color ='green'>Data Deleted</font>";
        }

    ?>
        <div class="container">
        <table class="table">
            <thead>
                <tr class="text-center">
                    <th scope="col">ID</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Gmail</th>
                    <th scope="col">Password</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
    <?php
     
        if ($dataCount > 0) {
            $serial_number = 1;
            while ($rows = mysqli_fetch_assoc($connection)) {
              $dbId =  $rows['id'] ;
            ?>
                <tbody class="table-group-divider">
                    <tr class="text-center">
                        <th scope="row"><?php echo $serial_number ;?></th>
                        <td><?php echo $rows['userName'] ;?></td>
                        <td><?php echo $rows['email'] ;?></td>
                        <td><?php echo $rows['password'] ;?></td>
                        <td><a href="delete.php?id=<?php echo $dbId?>">Delete</a></td>
                    </tr>
                </tbody>

            <?php
            $serial_number++;
            }
        }else {
            echo "You don't have any data in your database";
        }
    ?>

        </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>