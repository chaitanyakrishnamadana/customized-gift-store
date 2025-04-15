<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Giftly</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <nav class="nav-container">
            <div class="logo">Giftly</div>
            <div class="nav-links">
                <a href="index.php">Home</a>
                <a href="customize.php">Customize</a>
                <a href="cart.php">Cart</a>
            </div>
        </nav>
    </header>

    <main class="thank-you-container">
        <div class="thank-you-content">
            <h1>Thank You for Your Order!</h1>
            
            <?php
            if (isset($_GET['order_id'])) {
                $orderId = htmlspecialchars($_GET['order_id']);
                echo '<div class="order-details">
                        <p>Your order has been successfully placed.</p>
                        <p>Order ID: <strong>' . $orderId . '</strong></p>
                        <p>We have sent a confirmation email with your order details.</p>
                      </div>';
            } else {
                echo '<p>Order confirmation details not found.</p>';
            }
            ?>

            <div class="next-steps">
                <h2>What's Next?</h2>
                <ul>
                    <li>You will receive an email confirmation shortly</li>
                    <li>We will process your order within 24 hours</li>
                    <li>You will receive tracking information once your order ships</li>
                </ul>
            </div>

            <div class="action-buttons">
                <a href="index.php" class="cta-button">Continue Shopping</a>
                <a href="customize.php" class="cta-button secondary">Create Another Gift</a>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024 Giftly. All rights reserved.</p>
        </div>
    </footer>
</body>
</html> 