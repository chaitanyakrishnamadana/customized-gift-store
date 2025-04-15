<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customizedgift";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create contacts table if it doesn't exist
$create_table = "CREATE TABLE IF NOT EXISTS contacts (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    subject VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('new', 'read', 'replied') DEFAULT 'new'
)";

if (!$conn->query($create_table)) {
    die("Error creating contacts table: " . $conn->error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize form data
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(trim($_POST["subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));
    
    // Validate inputs
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required";
    }
    
    if (empty($subject)) {
        $errors[] = "Subject is required";
    }
    
    if (empty($message)) {
        $errors[] = "Message is required";
    }
    
    // If there are validation errors, redirect back with error messages
    if (!empty($errors)) {
        $_SESSION['contact_errors'] = $errors;
        header("Location: contact.php");
        exit();
    }
    
    // Insert contact message into database
    $stmt = $conn->prepare("INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);
    
    if ($stmt->execute()) {
        // Send confirmation email to user
        $to = $email;
        $subject = "Thank you for contacting Giftly";
        $message = "Dear " . $name . ",\n\n";
        $message .= "Thank you for contacting us. We have received your message and will get back to you soon.\n\n";
        $message .= "Best regards,\nGiftly Team";
        
        // In a production environment, uncomment and configure:
        // mail($to, $subject, $message);
        
        $_SESSION['contact_success'] = "Thank you for your message. We'll get back to you soon!";
        header("Location: contact.php");
        exit();
    } else {
        $_SESSION['contact_errors'] = ["Error sending message. Please try again later."];
        header("Location: contact.php");
        exit();
    }
    
    $stmt->close();
    $conn->close();
}
?> 