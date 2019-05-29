<?php

// if(empty($_POST['name'])
//     $name = $_POST['name'];
//     $email_address = $_POST['email'];
//     $message = $_POST['message'];
         
//     // Create the email and send the message
//     $to = 'sabae.larif@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
//     $email_subject = "Website Contact Form:  $name";
//     $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
//     $headers = "From: sabae.larif@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
//     $headers .= "Reply-To: $email_address";   
//     mail($to,$email_subject,$email_body,$headers);
//     return true;   
    // header('location:index.php?msgsend');
   

// if (isset($_POST['submit'])){
//     $name = $_POST['name'];
//     $message = $_POST['message'];
//     $email = $_POST['email'];

//     $mailTo = "sabae.larif@gmail.com";
//     $headers = "From: ".$email;
//     $txt = "You have received an e-mail from ".$name.".\n\n".$message;

//     mail($mailTo, $message, $text, $headers);
//     header("Location: index.php?mailsend");
// }      


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $email_from = 'sabae.larif@gmail.com';
    $email_subject ="contact form:  $name";
    $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nMessage:\n$message";
    
    
    $to = 'sabae.larif@gmail.com';
    $headers = "form : $email_from \r\n ";
    $headers .= "Reply-to : $email \r\n";
    mail($to, $email_subject,$email_body,$headers);
    header ('Location: ../index.php');
    }
?>