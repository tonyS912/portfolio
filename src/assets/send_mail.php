<?php

########### CONFIG ###############

$recipient = 'info@tony-schiller.com';
$redirect = 'tony-schiller.com';

########### CONFIG END ###########



########### Intruction ###########
#
#   This script has been created to send an email to the $recipient
#
#  1) Upload this file to your FTP Server
#  2) Send a POST rewquest to this file, including
#     [name] The name of the sender (Absender)
#     [message] Message that should be send to you
#
##################################



###############################
#
#        DON'T CHANGE ANYTHING FROM HERE!
#
#        Ab hier nichts mehr ändern!
#
###############################

switch ($_SERVER['REQUEST_METHOD']) {
    case ("OPTIONS"): //Allow preflighting to take place.
        header("Access-Control-Allow-Headers: content-type");
        exit;
    case ("POST"): //Send the email;

        $subject = "Contact From " . $_POST['name'];
        $headers[] = 'From: ' . $_POST['mail'];
        $myMassage = $_POST['mail'] . " " . $_POST['name'] . "\n" . $_POST['message'];

        mail($recipient, $subject, $myMassage , $headers);

        header("Location: " . $redirect);

        break;
    default: //Reject any non POST or OPTIONS requests.
        header("Allow: POST", true, 405);
        exit;
}
