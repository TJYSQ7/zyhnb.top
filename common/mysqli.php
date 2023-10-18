<?php
//1.连接数据库
//2.选择数据库
$hostname = "127.0.0.1";
$username = "root";
$password = "666666";
$database = "content";
$connect = mysqli_connect($hostname, $username, $password, $database);
if (!$connect) {
    die("连接数据库服务器失败");
} else {
    echo '数据库连接成功<br><br>';
}
//设置字符集
$utf8 = mysqli_query($connect, "set names utf8");
if (!$utf8) {
    die("字符集设置失败");
} else {
    echo '字符集设置成功<br><br>';
}
//3.执行sql语句
//4.处理结果集
//5.释放资源与关闭连接