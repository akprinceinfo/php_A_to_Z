
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
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
           echo"<font color ='red'>Data Deleted</font>";
        }
        // Update page data received
        if (isset($_REQUEST['updateData'])) {
           echo"<font color ='green'>Data Update</font>";
        }


        

    ?>
        <div class="container">
        <table class="table">
            <thead>
                <tr class="text-center">
                    <th scope="col">ID</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Profile Photo</th>
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
                $userName =  $rows['userName'] ;
                $email =  $rows['email'] ;
                $password =  $rows['password'] ;
                
                $insImageadd = $rows['profile_photo'];

            ?>
                <tbody class="table-group-divider">
                    <tr class="text-center">
                        <th scope="row"><?php echo $serial_number;?></th> 
                        <td><?php echo $userName;?></td>
                        <td><img width='50px' src="image/<?php echo $insImageadd?>" alt="" srcset=""></td>
                        <td><?php echo $email;?></td>
                        <td><?php echo $password;?></td>
                        <td><a href="single_data_edit.php?edit_Id=<?php echo $dbId ?>;">Edit</a> || <a href="delete.php?id=<?php echo $dbId?>">Delete</a></td>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>