<?php
//连接数据库，选择数据库
$hostname = "127.0.0.1";
$username = "root";
$password = "88888888";
$database = "content";

$conn = mysqli_connect($hostname, $username, $password, $database);
if (!$conn) {
    die("数据库连接失败");
}
