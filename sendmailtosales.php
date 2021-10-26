<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $_POST['email'];
    $name = $_POST['name'];
    $to = "brunoruf@gmail.com";
    $subject = "New Website Quote";
    $message = $_POST['message'];
    $headers = "From:" . $name;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
?>