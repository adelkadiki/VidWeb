<?php

if($_POST){

    $name = $_POST['name'];
    
     $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    

    mail("info@cipherdigits.com", $name, $message, "From: $mailFrom\r\n");
    
}
    ?>