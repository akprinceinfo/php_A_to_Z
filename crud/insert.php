

<?php 
 
    if(isset($_REQUEST['submit'])){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        
        //file add 
        $insImage = $_FILES['imageUpolod']; // array hesaba data pass hoi
        $imageName = $insImage['name']; //image name
        $image_tem_name = $insImage['tmp_name'];// tempore name

        


        //condition Use
        if ($name != "" && $email && $password) {
            //Database connect
            $conn = mysqli_connect("localhost","root","","user_info");
            
            if(!$conn){
                die("not connect" . mysqli_error($conn));
            }

            
            // =============== Image Uploads ========================
            $imgUnikid = uniqid().".png";
            if (!empty($imageName)) {
                $imgLocation = "image/";
                if (move_uploaded_file($image_tem_name,$imgLocation.$imgUnikid)) {
                    header("location:formView.php");
                }
               
             }else{
                 echo "Your File is empty";
             }


            $queryDataSend = "INSERT INTO ditels_table(name,email,password,image) VALUES ('$name' ,'$email','$password','$imgUnikid')";

           
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



