<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "email";
    $to = "sales@carcharging.com.au";
    $subject = "New Website Quote";
    $message = $_POST['email'];
    $message .= " Wrote: " .$_POST['message'];
    // The content-type header must be set when sending HTML email
    $headers = "MIME-Version: 1.0" . "\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\n";
    $headers = "From:" . $from;
    if(mail($to,$subject,$message, $headers)) {
      echo ("<script>location.href='message-sent.html'</script>");
    // echo "Thank you for your enquiry! One of our team members will get back to you shortly.";
    } else {
      echo "Message was not sent.";
    }

/*
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $_POST['email'];
    $name = $_POST['name'];
    $to = "sales@carcharging.com.au";
    $subject = "New Website Quote";
    $message = $_POST['message'];
    $headers = "From:" . $name;
    mail($to,$subject,$message, $headers);
    echo "Thank you for your enquiry! One of our team members will get back to you shortly."; */

?>