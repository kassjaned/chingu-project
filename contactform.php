<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'kassjaned@gmail.com';

    $email_subject = 'New Contact submission';

    $email_body = "User Name: $name.\n".
                    "User Email: $email.\n".
                        "User Message: $message.\n";

    $to = "kassjaned@gmail.com";
    
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-to: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");

?>
