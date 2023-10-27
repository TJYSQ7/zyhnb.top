<?php
//注册数据验证！！！
function registerCheck($data)
{
    $name = trim($data['name']);
    $pw = trim($data['pw']);
    $cpw = trim($data['cpw']);
    $phone = trim($data['phone']);
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
}
//判断用户名是否被占用
function usernameCheck($conn, $data)
{
    $name = $data['name'];
    $sql = "select * from info where username='$name'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('用户名已被占用');history.back();</script>";
        exit;
    }
}
//登录数据验证！！！
function loginCheck($data)
{
    $phone = trim($data['phone']);
    $pw = trim($data['pw']);
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
}
//添加文章验证！！！
function articleCheck($data)
{
    $title = trim($data['title']);
    $content = trim($data['content']);
    $author = trim($data['author']);
    if (!strlen($title) || !strlen($content) || !strlen($author)) {
        echo "<script>alert('标题，内容不能为空');history.back();</script>";
        exit;
    }
}
