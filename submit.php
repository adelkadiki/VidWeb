<?php




//include 'autoload.php';


if($_POST['name']){

    $domain= $_POST['domain'] ;
    $name= $_POST['name'] ;
    $email= $_POST['email'];
    $phone= $_POST['phone'];
}







$message = 'Client name : '.$name.' Domain : '.$domain.' Email : '.$email.' Phone : '.$phone ;


mail("info@cipherdigits.com", $domain, $message);
