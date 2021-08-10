<?php

    $myemail = 'cneidig1@ivytech.edu';
    $favorite_coaster = $_GET['favCoaster'];
    $favorite_park = $_GET['favPark'];
    $favorite_type = $_GET['favType'];


    $to = $myemail;
    $email_subject = "Contact form submission: $name";
    $email_body = "You have received a new message. ".
    " Here are the details:\n favCoaster: $favorite_coaster \n ".
    "favPark: $favorite_park\n favType \n $favorite_type";
    $headers = "From: $myemail\n";
    $headers .= "Reply-To: $email_address";
    mail($to,$email_subject,$email_body,$headers);
    ?>
