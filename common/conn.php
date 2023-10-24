<?php
//连接数据库，选择数据库，设置字符集
$hostname = "127.0.0.1";
$username = "root";
$password = "88888888";
$database = "content";
$conn = mysqli_connect($hostname, $username, $password, $database);
if (!$conn) {
    die("数据库连接失败");
}
$utf8 = mysqli_query($conn, "set names utf8mb4");
