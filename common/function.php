<?php
//连接数据库
function connect()
{
    $hostname = "127.0.0.1";
    $username = "root";
    $password = "88888888";
    $database = "content";
    $conn = mysqli_connect($hostname, $username, $password, $database);
    if (!$conn) {
        die("数据库连接失败");
    }
    mysqli_query($conn, "set names utf8mb4");
    return $conn;
}
//断开数据库连接
function disconn($conn)
{
    mysqli_close($conn);
}
//退出登录
function logout()
{
    session_start();
    session_destroy();
    header('location://zyhnb.top');
}
