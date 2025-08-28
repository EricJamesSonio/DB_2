<?php

require_once(__DIR__ . '/../../db.php');
require_once(__DIR__ . '/../../function.php');

// Get customer ID
$customerId = mysqli_fetch_assoc(mysqli_query($con, "SELECT customer_id FROM customer WHERE email = 'juan.delacruz@email.com'"))['customer_id'];

insertDataSmart($con, 'order', 
    ['customer_id', 'total_amount', 'order_status', 'payment_method'], 
    [
        [$customerId, 245.00, 'delivered', 'Cash on Delivery'],
        [$customerId, 180.00, 'processing', 'GCash'],
        [$customerId, 95.00, 'pending', 'Bank Transfer']
    ]
);

echo "Orders seeding completed.<br>";

?>