<?php
// contact.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars(trim($_POST["message"]));

    // Check for valid input
    if (!$name || !$email || !$message) {
        die("Invalid input. Please fill in all fields correctly.");
    }

    // Email settings
    $to = "waleeddogare@gmail.com"; // Replace with your email address
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Email body
    $emailBody = "Name: $name\n";
    $emailBody .= "Email: $email\n";
    $emailBody .= "Message:\n$message\n";

    // Send email
    if (mail($to, $subject, $emailBody, $headers)) {
        echo "<p>Thank you for contacting us, $name. We will get back to you soon!</p>";
    } else {
        echo "<p>There was an error sending your message. Please try again later.</p>";
    }
} else {
    // Not a POST request
    header("Location: index.php"); // Redirect to the home page or any other page
    exit;
}
?>
