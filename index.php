
<!-- Input Data  -->
<!-- 
<form action="output.php" method="POST">
    <input type="text" name="name" id="" placeholder="Name">
    <input type="text" name="email" id="" placeholder="email">
    <input type="submit" value="Data send">
</form> -->
 
<!-- ========================================================================================= -->

<!-- File Upload  -->

<!-- <form action="file.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="files" id="">Files
    <input type="submit" value="Upload">
</form> -->

<!-- ========================================================================================= -->

<!-- password login  -->

<!-- <form action="PassWord_login.php" method="get">
    <input type="text" name="user" id="" placeholder="Name">
    <input type="password" name="userPass" id="" placeholder="password">
    <input type="submit" value="Upload">
</form> -->

    <?php 

        // if(isset($_REQUEST["wrongPass"])){
        //     echo $_REQUEST["wrongPass"];
        // }
    ?> 
<!-- ================ Password Encryption and Security==================== -->



<form action="PassWord_login.php" method="get">
    <input type="text" name="user" id="" placeholder="Name">
    <input type="password" name="userPass" id="" placeholder="password">
    <input type="submit" value="Upload">
</form>

<?php 

    
?>