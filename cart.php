<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart - Giftly</title>
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
                <a href="cart.php" class="active">Cart</a>
            </div>
        </nav>
    </header>

    <main class="cart-container">
        <h1>Your Cart</h1>
        
        <?php
        session_start();
        if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
            echo '<div class="empty-cart">
                    <p>Your cart is empty</p>
                    <a href="customize.php" class="cta-button">Start Customizing</a>
                  </div>';
        } else {
            $total = 0;
            echo '<div class="cart-items">';
            foreach ($_SESSION['cart'] as $index => $item) {
                $total += $item['totalPrice'];
                echo '<div class="cart-item">
                        <div class="item-details">
                            <h3>' . ucfirst($item['giftType']) . '</h3>
                            <p>Custom Text: ' . htmlspecialchars($item['customText']) . '</p>
                            <p>Packaging: ' . ucfirst($item['packaging']) . '</p>
                            <p>Delivery: ' . ucfirst($item['delivery']) . '</p>';
                if ($item['imagePath']) {
                    echo '<img src="' . htmlspecialchars($item['imagePath']) . '" alt="Custom Image" class="item-image">';
                }
                echo '<p class="item-price">$' . number_format($item['totalPrice'], 2) . '</p>
                        <form action="remove_item.php" method="POST" class="remove-form">
                            <input type="hidden" name="item_index" value="' . $index . '">
                            <button type="submit" class="remove-button">Remove</button>
                        </form>
                      </div>
                    </div>';
            }
            echo '</div>
                  <div class="cart-summary">
                    <h2>Order Summary</h2>
                    <p>Total Items: ' . count($_SESSION['cart']) . '</p>
                    <p class="total">Total Price: $' . number_format($total, 2) . '</p>
                    <a href="checkout.php" class="cta-button">Proceed to Checkout</a>
                  </div>';
        }
        ?>
    </main>

    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024 Giftly. All rights reserved.</p>
        </div>
    </footer>
</body>
</html> 