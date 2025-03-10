<?php
if(!empty($_POST['sender_name']) && !empty($_POST['email'])){
    $to = "info@webgizzmo.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $sender_name = $_POST['sender_name'];
    //$last_name = $_POST['last_name'];
    $subject = $_POST['subject'];//"I want to ship faster too!";
    $subject2 = "Copy of your form submission to WebgGizzmo";
    //$message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message']; //sender-name
    $message2 = "We are thrilled you've chosen WebGizzmo to help you ship software faster. Here is a copy of your message: " . $sender_name . "\n\n" . $_POST['message'];
    $message = $sender_name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    //echo "Mail Sent. Thank you " . $sender_name . ", we will contact you shortly.";
    // You can also use to redirect to another page.
    header('Location: /new/#t10');
 }else{
   header('Location: /new/#t9');
 }
?>
