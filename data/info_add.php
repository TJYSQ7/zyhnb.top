<?php
$name = $_POST['name'];
$pw = $_POST['pw'];
$cpw = $_POST['cpw'];
$email = $_POST['email'];
//验证数据
$name = trim($name);
$pw = trim($pw);
$email = trim($email);
if (!strlen($name) || !strlen($pw) || !strlen($email)) {
    echo "<script>alert('用户名,密码,邮箱不能为空');history.back();</script>";
    exit;
};
if ($pw <> $cpw) {
    echo "<script>alert('两次密码不一致');history.back();</script>";
    exit;
};
//判断用户名是否被占用
require '../common/conn.php';
$sql = "select * from info where username='$name'";
$select = mysqli_query($conn, $sql);
if (mysqli_num_rows($select) > 0) {
    echo "<script>alert('用户名已被占用');history.back();</script>";
    exit;
};

//

$utf8 = mysqli_query($conn, "set names utf8mb4");
$sql = "insert into `info` values(null,'$name','" . MD5($pw) . "','$email','" . time() . "');";
$insert = mysqli_query($conn, $sql);
if ($insert) {
    echo "<script>alert('数据插入成功');</script>";
} else {
    echo "<script>alert('数据插入失败');</script>";
};
