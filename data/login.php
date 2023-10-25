<?php
session_start();
$phone = $_POST['phone'];
$pw = $_POST['pw'];
//数据验证！！！
$phone = trim($phone);
$pw = trim($pw);
if (!strlen($phone) || !strlen($pw)) {
    echo "<script>alert('用户名,密码,手机号不能为空');history.back();</script>";
    exit;
} else {
    if (!preg_match('/^(13[0-9]|14[01456879]|15[0-35-9]|16[2567]|17[0-8]|18[0-9]|19[0-35-9])\d{8}$/', $phone)) {
        echo "<script>alert('手机号格式不正确');history.back();</script>";
        exit;
    }
    if (!preg_match('/^[a-zA-Z]\w{5,17}$/', $pw)) {
        echo "<script>alert('密码格式不正确');history.back();</script>";
        exit;
    }
}
//查询
$pw = md5($pw);
require '../common/conn.php';
$sql = "select * from info where phone= '$phone' and pw= '$pw' ";
$select = mysqli_query($conn, $sql);
if (mysqli_num_rows($select) > 0) {
    $_SESSION['loggedUsername'] = $phone;
    echo "<script>alert('登陆成功');location.href='//zyhnb.top';</script>";
} else {
    echo "<script>alert('用户名或密码错误');history.back();</script>";
}
