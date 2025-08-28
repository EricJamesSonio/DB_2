<?php

require_once(__DIR__ . '/../../db.php');
require_once(__DIR__ . '/../../function.php');

// Get order IDs and product IDs
$orderResult = mysqli_query($con, "SELECT order_id FROM `order` ORDER BY order_id LIMIT 3");
$orderIds = [];
while ($row = mysqli_fetch_assoc($orderResult)) {
    $orderIds[] = $row['order_id'];
}

$tomatoId = mysqli_fetch_assoc(mysqli_query($con, "SELECT product_id FROM product WHERE name = 'Fresh Tomatoes'"))['product_id'];
$bananaId = mysqli_fetch_assoc(mysqli_query($con, "SELECT product_id FROM product WHERE name = 'Bananas'"))['product_id'];
$mangoId = mysqli_fetch_assoc(mysqli_query($con, "SELECT product_id FROM product WHERE name = 'Mangoes'"))['product_id'];
$lettuceId = mysqli_fetch_assoc(mysqli_query($con, "SELECT product_id FROM product WHERE name = 'Green Lettuce'"))['product_id'];
$milkId = mysqli_fetch_assoc(mysqli_query($con, "SELECT product_id FROM product WHERE name = 'Fresh Milk'"))['product_id'];

insertDataSmart($con, 'order_detail', 
    ['order_id', 'product_id', 'quantity', 'price_each'], 
    [
        // Order 1 details
        [$orderIds[0], $tomatoId, 2, 45.00],
        [$orderIds[0], $bananaId, 4, 25.00],
        [$orderIds[0], $mangoId, 1, 120.00],
        
        // Order 2 details
        [$orderIds[1], $lettuceId, 2, 35.00],
        [$orderIds[1], $mangoId, 1, 120.00],
        
        // Order 3 details
        [$orderIds[2], $milkId, 1, 65.00],
        [$orderIds[2], $bananaId, 1, 25.00]
    ]
);

echo "Order details seeding completed.<br>";

?>