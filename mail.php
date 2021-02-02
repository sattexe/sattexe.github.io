<?php
if(isset($_POST['submit'])){
    $to = "satt.works@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Contact @ styn.me";
    $subject2 = "Copy of Contact @ styn.me";
    $message = $name . " " . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    header('Location: index.php');
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>