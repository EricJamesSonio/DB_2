<?php

echo "<h2>🌱 AgriFresh Database Seeder</h2>";
echo "<p>Starting database seeding process...</p><hr>";

// Database model Creation
echo "<h3>📊 Creating model</h3>";
require_once(__DIR__ . '/model/admin.php');
require_once(__DIR__ . '/model/category.php');
require_once(__DIR__ . '/model/customer.php');
require_once(__DIR__ . '/model/product.php');
require_once(__DIR__ . '/model/order.php');
require_once(__DIR__ . '/model/order_detail.php');
require_once(__DIR__ . '/model/admin_log.php');

echo "<hr>";

// Data Seeding
echo "<h3>🌾 Seeding Data</h3>";

// Seed in correct order (respecting foreign keys)
require_once(__DIR__ . '/scripts/data/admin_seed.php');
require_once(__DIR__ . '/scripts/data/category_seed.php');
require_once(__DIR__ . '/scripts/data/customer_seed.php');
require_once(__DIR__ . '/scripts/data/product_seed.php');
require_once(__DIR__ . '/scripts/data/order_seed.php');
require_once(__DIR__ . '/scripts/data/order_detail_seed.php');
require_once(__DIR__ . '/scripts/data/admin_log_seed.php');

echo "<hr>";
echo "<h3>✅ Seeding Complete!</h3>";
echo "<p><strong>Summary:</strong></p>";
echo "<ul>";
echo "<li>✅ All model created/updated</li>";
echo "<li>✅ Admin accounts created</li>";
echo "<li>✅ Product categories added</li>";
echo "<li>✅ Sample customers added</li>";
echo "<li>✅ Sample products with categories added</li>";
echo "<li>✅ Sample orders and order details created</li>";
echo "<li>✅ Admin activity logs added</li>";
echo "</ul>";

echo "<p><em>Your Agri Fresh database is ready to use!</em></p>";

?>