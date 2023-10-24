<?php
$name = $_POST['name'];
$pw = $_POST['pw'];
$cpw = $_POST['cpw'];
$phone = $_POST['phone'];
//数据验证！！！
$name = trim($name);
$pw = trim($pw);
$phone = trim($phone);
if (!strlen($name) || !strlen($pw) || !strlen($phone)) {
    echo "<script>alert('用户名,密码,手机号不能为空');history.back();</script>";
    exit;
} else {
    if (!preg_match('/^(13[0-9]|14[01456879]|15[0-35-9]|16[2567]|17[0-8]|18[0-9]|19[0-35-9])\d{8}$/', $phone)) {
        echo "<script>alert('手机号格式不正确');history.back();</script>";
        exit;
    }
}
if ($pw <> $cpw) {
    echo "<script>alert('两次密码不一致');history.back();</script>";
    exit;
} else {
    if (!preg_match('/^[a-zA-Z]\w{5,17}$/', $pw)) {
        echo "<script>alert('密码格式不正确');history.back();</script>";
        exit;
    }
}
//判断用户名是否被占用
require '../common/conn.php';
$sql = "select * from info where username='$name'";
$select = mysqli_query($conn, $sql);
if (mysqli_num_rows($select) > 0) {
    echo "<script>alert('用户名已被占用');history.back();</script>";
    exit;
};

//

$sql = "insert into `info` values(null,'$name','" . MD5($pw) . "','$phone','" . time() . "');";
$insert = mysqli_query($conn, $sql);
if ($insert) {
    echo "<script>alert('数据插入成功');</script>";
    exit;
} else {
    echo "<script>alert('数据插入失败');</script>";
    exit;
};
