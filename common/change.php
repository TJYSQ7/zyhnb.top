<?php
//添加文章
function add_article($conn, $data)
{
    $title = $data['title'];
    $content = $data['content'];
    $author = $data['author'];
    $time = time();
    $sql = "insert into article values(NULL,'$title','$content','$author','$time')";
    $insert = mysqli_query($conn, $sql);
    if ($insert) {
        echo "<script>alert('文章发布成功');location.href='//zyhnb.top';</script>";
    } else {
        echo "<script>alert('文章发布失败');history.back();</script>";
    };
}
//添加用户
function add_user($conn, $data)
{
    $name = $data['name'];
    $pw = md5($data['pw']);
    $phone = $data['phone'];
    $time = time();
    $sql = "insert into info values(NULL,'$name','$pw','$phone','$time')";
    $insert = mysqli_query($conn, $sql);
    if ($insert) {
        echo "<script>alert('注册成功');location.href='//zyhnb.top/php/login.php';</script>";
    } else {
        echo "<script>alert('注册失败');history.back();</script>";
    };
}
//删除数据
function del_article($conn,  $data)
{
    $id = $data['id'];
    $sql = "delete from article where id='$id'";
    $delete = mysqli_query($conn, $sql);
    if ($delete) {
        echo "<script>alert('文章删除成功');history.back();</script>";
    } else {
        echo "<script>alert('文章删除失败');history.back();</script>";
    };
}
//删除用户
function del_user($conn, $data)
{
    $id = $data['id'];
    $sql = "delete from info where id='$id'";
    $delete = mysqli_query($conn, $sql);
    if ($delete) {
        echo "<script>alert('数据删除成功');history.back();</script>";
    } else {
        echo "<script>alert('数据删除失败');history.back();</script>";
    }
}
