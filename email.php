<?php
    ini_set( 'display_errors', 587);
    error_reporting( E_ALL );
    $from = "sara.nongmin@gmail.com";
    $to = "antimanongmin1@gmail.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
?>