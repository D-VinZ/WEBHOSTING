<?php
// Your existing code here (if any)

session_start();

if (isset($_SESSION["shopping_cart"])) {
    // Clear the shopping cart session
    unset($_SESSION["shopping_cart"]);
    
    // Close the session write lock
    session_write_close();

    // Redirect to shop1.php
    header("Location: shop1.php");
    exit(); // Ensure that no further code is executed after the redirect
}

// The rest of your code here (if any)

// Include shop1.php
include 'shop1.php';

// More code if needed
?>
