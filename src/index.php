<?php
$host = 'db';
$user = 'portfolio_user';
$pass = 'StrongPassW0rd!@#';
$db   = 'portfolio_db';

$conn = new mysqli($host, $user, $pass, $db);

echo "<h1>Portfolio của vieth</h1>";

if ($conn->connect_error) {
    echo "<p style='color:red;'>Kết nối Database thất bại: " . $conn->connect_error . "</p>";
} else {
    echo "<p style='color:green;'>Kết nối Database MySQL thành công!</p>";
}
?>
