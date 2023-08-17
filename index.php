<?php

    $emailTo = "info@mwendwambua.site";
    $subject = "Greetings";
    $body = " You are awesome";
    $headers = "From: me@mwendwambua.site";

    if(mail($emailTo, $subject, $body, $headers)) {
        echo "The email was sent successfully";
    }
    else {
        echo "The email could not be sent!";
    }

?>