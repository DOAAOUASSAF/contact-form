<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // For testing purposes, let's just display the info
    echo "<h2>Message Sent!</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Message:</strong> $message</p>";

    // If you want to send email, uncomment this:
    /*
    $to = "your_email@example.com";
    $subject = "New Contact Message from $name";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Message successfully sent!</p>";
    } else {
        echo "<p>Failed to send message.</p>";
    }
    */
} else {
    echo "Invalid request!";
}
?>
