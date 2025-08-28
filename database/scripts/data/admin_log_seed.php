<?php

require_once(__DIR__ . '/../../db.php');
require_once(__DIR__ . '/../../function.php');

// Get admin ID
$adminId = mysqli_fetch_assoc(mysqli_query($con, "SELECT admin_id FROM admin WHERE email = 'admin@farmfresh.com'"))['admin_id'];

insertDataSmart($con, 'admin_logs', 
    ['admin_id', 'action'], 
    [
        [$adminId, 'Created product: Fresh Tomatoes'],
        [$adminId, 'Updated product: Bananas'],
        [$adminId, 'Created category: Vegetables'],
        [$adminId, 'Login attempt'],
        [$adminId, 'Updated inventory for Fresh Milk']
    ]
);

echo "Admin logs seeding completed.<br>";

?>