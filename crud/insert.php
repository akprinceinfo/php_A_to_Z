

<?php 
 
    if(isset($_REQUEST['submit'])){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        
        //file add 
        //$insImage = $_REQUEST['insImage']; // array hesaba data pass hoi
        //$imageName = $insImage['name']; //image name
        //$image_tem_name = $insImage['tmp_name'];// tempore name

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
        }else{
            echo "Any Field cannot be block";
        }
    }

    

    // $query = "SELECT * FROM ditels"



