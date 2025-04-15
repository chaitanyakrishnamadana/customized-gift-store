<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['item_index'])) {
    $index = (int)$_POST['item_index'];
    
    if (isset($_SESSION['cart'][$index])) {
        // Remove the item from the cart
        unset($_SESSION['cart'][$index]);
        // Reindex the array to prevent gaps
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }
}

// Redirect back to cart page
header("Location: cart.php");
exit();
?> 