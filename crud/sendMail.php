<?php 

    $to_email = "akprince0268@gmail.com";
    $subject = "Email Test PHP";
    $body = "Hi, Email Check and Body";
    $headers = "akmukto0268@gmail.com";

    if (mail($to_email,$subject,$body,$headers)) {
        echo "Email Send Success $to_email";
    }else{
        echo "Email Not Send";
    }


?>