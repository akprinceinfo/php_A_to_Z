
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
        
    
    <?php 

        //Database connect
        $conn = mysqli_connect("localhost","root","","user_info");
                
       
        if(!$conn){
            die("not connect" . mysqli_error($conn));
        }

       


        $query = "SELECT * FROM ditels_table";
        $connection = mysqli_query($conn , $query);
        $dataCount = mysqli_num_rows($connection);

        // $searchQuery = "SELECT * FROM ditels_table WHERE name LIKE '%rokey%'" ;
        

        if (isset($_REQUEST['searchBtn'])) {
            echo  $searchRecive = $_REQUEST['searchField'];
            $searchQuery = "SELECT * FROM ditels_table WHERE name LIKE '%$searchRecive%'";
            $result = mysqli_query($conn,$searchQuery);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<p>" . $row["name"] . "</p>";
                }
            } else {
                echo "No results found";
            }
        }

        


        // Delete page data received
        if (isset($_REQUEST['deleted'])) {
           echo"<font color ='red'>Data Deleted</font>";
        }
        // Update page data received
        if (isset($_REQUEST['updateData'])) {
           echo"<font color ='green'>Data Update</font>";
        }
    ?>
       


        <div class="container mt-5">
        <form action="" method="POST">
        <table class="table">
            <div class="input-group d-flex justify-content-end">
                <form action="" method="POST">
                    <div class="form-outline">
                        <input type="search" id="form1" class="form-control" name="searchField" />
                    </div>
                    <button type="submit" class="btn btn-primary" name="searchBtn" data-mdb-ripple-init>
                        serach
                    </button>
                </form>
            </div>
            <thead>
                <tr class="text-center">
                    <th scope="col">ID</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Profile Photo</th>
                    <th scope="col">Gmail</th>
                    <th scope="col">Password</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Countery</th>
                    <th scope="col">Delete</th>
                    <th scope="col"><input type="submit" class="btn btn-danger" value="Delete Check" name="multiDeleteBtn"></th>
                </tr>
            </thead>
    <?php 

        if ($dataCount > 0) {
            $serial_number = 1;
            while ($rows = mysqli_fetch_assoc($connection)) {
                $dbId =  $rows['id'];
                $userName =  $rows['name'];
                $email =  $rows['email'];
                $password =  $rows['password'];
                $gender =  $rows['gender'];
                $countery =  $rows['countery'];

                $insImageadd = $rows['image'];
            ?>
                <tbody class="table-group-divider">
                    
                    <tr class="text-center">
                        <th scope="row"><?php echo $serial_number;?></th> 
                        <td><?php echo $userName;?></td>
                        <td><img width='50px' src="image/<?php echo $insImageadd?>" alt="" srcset=""></td>
                        <td><?php echo $email;?></td>
                        <td><?php echo $password;?></td>
                        <td><?php echo $gender;?></td>
                        <td><?php echo $countery;?></td>
                        <td><a href="single_data_edit.php?edit_Id=<?php echo $dbId ?>;">Edit</a> || <a onclick="return confirm('Are You Sure?')" href="delete.php?id=<?php echo $dbId?>&DBiamgeName=<?php echo $insImageadd ?>">Delete</a></td>
                        <td><input type="checkbox" name="multiDelete[]" value="<?php echo $dbId ?>" id=""></td>
                    </tr>
                </tbody>

            <?php
            $serial_number++;
             }
            
            } 
        else {
            echo "You don't have any data in your database";
        }
    ?>

        </table>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>