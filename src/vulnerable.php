<?php
// Vulnerable PHP Code Example

// 1. SQL Injection
$id = $_GET['id'];
$conn = new mysqli("localhost", "user", "pass", "mydb");
$result = $conn->query("SELECT * FROM users WHERE id = '$id'");
$row = $result->fetch_assoc();
echo "Welcome " . $row['username'];

// 2. XSS
$name = $_GET['name'];
echo "Hello " . $name;

// 3. Command Injection
$file = $_GET['file'];
system("cat " . $file);

// 4. Hardcoded Credentials
$secret_key = "hardcoded_secret_key_123";

// 5. Insecure Random
$token = rand(1000, 9999);
echo "Your token is: $token";
?>
