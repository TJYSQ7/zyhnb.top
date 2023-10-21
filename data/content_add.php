<?php
// header("content-type:text/html;charset=utf-8");
$title = $_POST['title'];
$abstract = $_POST['abstract'];

require '../common/conn.php'; //连接数据库
$utf8 = mysqli_query($conn, "set names utf8mb4");
$sql = "INSERT INTO content_list VALUES ('$title','$abstract');";
$insert = mysqli_query($conn, $sql);
if ($insert) {
    echo "添加成功";
} else {
    echo "添加失败";
}
require '../common/break.php';//断开连接
