<?php
$servername = "localhost";
$username = "admin";
$password = "Ann1111aaaa";
 
// 创建连接
$conn = mysqli_connect ($servername, $username, $password);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
echo "连接成功";
?>