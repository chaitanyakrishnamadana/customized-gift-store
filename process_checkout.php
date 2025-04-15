<?php
session_start();

// Function to sanitize input
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate cart exists
    if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
        header("Location: cart.php");
        exit();
    }

    // Sanitize and validate shipping information
    $shippingInfo = [
        'fullName' => sanitizeInput($_POST['fullName']),
        'email' => filter_var($_POST['email'], FILTER_SANITIZE_EMAIL),
        'address' => sanitizeInput($_POST['address']),
        'city' => sanitizeInput($_POST['city']),
        'state' => sanitizeInput($_POST['state']),
        'zip' => sanitizeInput($_POST['zip']),
        'phone' => sanitizeInput($_POST['phone'])
    ];

    // Validate email
    if (!filter_var($shippingInfo['email'], FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }

    // Calculate total
    $total = 0;
    foreach ($_SESSION['cart'] as $item) {
        $total += $item['totalPrice'];
    }

    // Create order data
    $orderData = [
        'shipping' => $shippingInfo,
        'items' => $_SESSION['cart'],
        'total' => $total,
        'orderDate' => date('Y-m-d H:i:s'),
        'orderId' => uniqid('ORD')
    ];

    // Save order to file (in a real application, this would be saved to a database)
    $ordersDir = 'orders';
    if (!file_exists($ordersDir)) {
        mkdir($ordersDir, 0777, true);
    }

    $orderFile = $ordersDir . '/' . $orderData['orderId'] . '.json';
    file_put_contents($orderFile, json_encode($orderData, JSON_PRETTY_PRINT));

    // Send confirmation email (placeholder - in a real application, implement actual email sending)
    $to = $shippingInfo['email'];
    $subject = "Order Confirmation - Giftly";
    $message = "Thank you for your order!\n\n";
    $message .= "Order ID: " . $orderData['orderId'] . "\n";
    $message .= "Total Amount: $" . number_format($total, 2) . "\n\n";
    $message .= "We will process your order shortly.\n";
    
    // In a real application, uncomment and configure:
    // mail($to, $subject, $message);

    // Clear the cart
    unset($_SESSION['cart']);

    // Redirect to purchases page
    header("Location: purchases.php");
    exit();
} else {
    // If not POST request, redirect to cart
    header("Location: cart.php");
    exit();
}
?> 