<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullName = $_POST["FName"];
    $email = $_POST["Email"];
    $subject = $_POST["Subject"];
    $message = $_POST["msg"];

    // Simple validation
    if (empty($fullName) || empty($email) || empty($subject) || empty($message)) {
        header("Location: contact.php?error=empty");
        exit();
    }

    // You can perform additional validation or processing here

    // Send email (you may need to configure this based on your server)
    $to = "rdvcayanan@gmail.com";
    $headers = "From: $email";
    $mailBody = "Subject: $subject\n\nName: $fullName\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $mailBody, $headers)) {
        header("Location: contact.php?success=true");
        exit();
    } else {
        header("Location: contact.php?error=mail");
        exit();
    }
} else {
    // If someone tries to access this file directly without submitting the form
    header("Location: contact.php");
    exit();
}
?>
