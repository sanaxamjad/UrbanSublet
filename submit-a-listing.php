<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoloader
require 'vendor/autoload.php'; // Change this path to match the location of PHPMailer autoloader

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and sanitize them
    $title = htmlspecialchars($_POST["title"]);
    $imageUrl = htmlspecialchars($_POST["image-url"]);
    $description = htmlspecialchars($_POST["description"]);
    $price = htmlspecialchars($_POST["price"]);
    $location = htmlspecialchars($_POST["location"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $category = htmlspecialchars($_POST["category"]);
    $amenities = htmlspecialchars($_POST["amenities"]);

    // Create a PHPMailer instance
    $mail = new PHPMailer(true); // true enables exceptions

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.example.com'; // Your SMTP server host
        $mail->Port = 587; // Your SMTP server port (typically 587 for TLS, 465 for SSL)
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'your@example.com'; // SMTP username
        $mail->Password = 'your_password'; // SMTP password
        $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted

        // Sender and recipient settings
        $mail->setFrom($email); // Sender's email address
        $mail->addAddress('recipient@example.com'); // Recipient's email address
        $mail->Subject = 'New Listing Submission'; // Email subject
        $mail->Body = "Title: $title\nImage URL: $imageUrl\nDescription: $description\nPrice: $price\nLocation: $location\nEmail: $email\nPhone: $phone\nCategory: $category\nAmenities: $amenities"; // Email body

        // Send email
        $mail->send();
        echo 'Email sent successfully!';
    } catch (Exception $e) {
        echo 'Error sending email: ', $mail->ErrorInfo;
    }
} else {
    // If someone tries to access this file directly without submitting the form
    echo "Access denied.";
}
?>
