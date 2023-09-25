<?php
error_log("Contact form script started");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $project = $_POST["project"];
    $message = $_POST["message"];
    
    $to = "shazni121@gmail.com";
    $subject = "New message from $name";
    $headers = "From: $email";
    
    $messageBody = "Name: $name\n";
    $messageBody .= "Email: $email\n";
    $messageBody .= "Project: $project\n\n";
    $messageBody .= "Message:\n$message";
    
    mail($to, $subject, $messageBody, $headers);
    
    header("Location: thank-you.html");
    exit;
}
?>
