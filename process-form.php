<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set your email address where you want to receive messages
    $to = "yohanneis48.com";

    $subject = "New Message from $name";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/html\r\n";

    $mailBody = "
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Message:</strong> $message</p>
    ";

    mail($to, $subject, $mailBody, $headers);

    // You can redirect the user to a thank you page or display a success message here
    header("Location: thank-you.html");
    exit();
}
?>