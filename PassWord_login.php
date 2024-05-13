

<?php  

//     $userName = $_REQUEST['user'];
//     $userPass = $_REQUEST['userPass'];

//     $countPass = strlen($userPass); // strlen : number count kora hoi

//     if (!($countPass >= 5 && $countPass <= 10)) {
//         header("location:index.php?wrongPass=Your PassWord is = $userPass.");
//     }else{
//         echo("Perfect");
//     }

// ?>


<!-- ================ Password Encryption and Security =========09=========== -->
<?php  

    // $userName = $_REQUEST['user'];
    // $userPass = $_REQUEST['userPass'];

    // $hash_formet = "$2y$08$";  //02 = password janarator time
    // $salt = "qwertyuidsasdf76543221wqsdfgh";
    // $con = $hash_formet . $salt ;

    // echo crypt($userPass , $con);
   

?>

<!-- ================  PHP Random Password Generator =========10=========== -->


<?php 

    $all_keys = array('A', 'B', 'C', 'D', 'E', 'F',' G',' H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V',' W', 'X', 'Y', 'Z','a',' b', 'c', 'd', 'e', 'f',' g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y',' z','0', '1',' 2', '3',' 4', '5', '6', '7', '8', '9','!','@','#','$','%','^','&','*','(',')','_','+','=','');

    $leagth = array(8,9,10,11,12,13,14,15); 

    shuffle($leagth);
    $final_length = $leagth[0];

    echo"</br> Password Length is $final_length </br></br>";

    $str = "";

    for ($i=0; $i < $final_length; $i++) { 
        shuffle($all_keys);
        $str .= $all_keys[0];
    }

    echo "<br/>  $str"
?>