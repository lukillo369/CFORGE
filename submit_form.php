<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Basic email sending functionality
    $to = "your-email@example.com";
    $subject = "New Contact Form Submission";
    $headers = "From: " . $email;

    mail($to, $subject, $message, $headers);

    echo "Thank you for contacting us!";
} else {
    echo "Form submission error!";
}
?>
