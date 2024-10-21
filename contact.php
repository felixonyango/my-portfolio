<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "felixjuma@1995@gmail.com"; // Replace with your email
    $subject = "New Contact Form Submission";
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $headers = "From: $name <$email>\r\n";
    
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
