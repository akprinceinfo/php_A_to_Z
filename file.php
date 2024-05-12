
<!-- File data passing associative array -->

<!-- array(6) {
  ["name"]=> string(10) "Pranto.png"
  ["full_path"]=> string(10) "Pranto.png"
  ["type"]=> string(9) "image/png"
  ["tmp_name"]=> string(24) "D:\xampp\tmp\phpE8BC.tmp"
  ["error"]=> int(0) int(97364) ; [Byte used]
} -->

<!-- tmp_name : File Location -->
<pre>

<?php 

    $pro = $_FILES['files'];

    $size = $pro['size'];
    $fName = $pro['name'];
    $temName = $pro['tmp_name'];
   
    echo  floor($size/1000). "KB";


    // move_uploaded_file(FileName, Destination);
    if (!empty($fName)) {
        $location = "Photo/";
        if (move_uploaded_file($temName,$location.$fName)) {
            echo "File Upload Success";
            $path = $location.$fName; // image Loaction
            echo "<img src='$path' alt=' srcset=' width='200' height='200'>";
        }else{
            echo "Feiled";
        }
    }else{
        echo "File Not Upload";
    }

?>

</pre>