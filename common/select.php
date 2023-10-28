<?php
//所有文章查询
function sel_article_all($conn)
{
    $sql = "SELECT * FROM article";
    $select = mysqli_query($conn, $sql);
    if (!$select) {
        die("查询失败");
    }
    $all = mysqli_fetch_all($select, MYSQLI_ASSOC);
    return $all;
}
//单一文章查询
function sel_article_one($conn, $id)
{
    $sql = "SELECT * FROM article where id = '$id' ";
    $select = mysqli_query($conn, $sql);
    if (!$select) {
        die("查询失败");
    }
    $all = mysqli_fetch_all($select, MYSQLI_ASSOC);
    return $all;
}
//作者文章查询
function sel_article_author($conn, $author)
{
    $sql = "SELECT * FROM article where author = '$author' ";
    $select = mysqli_query($conn, $sql);
    if (!$select) {
        die("查询失败");
    }
    $all = mysqli_fetch_all($select, MYSQLI_ASSOC);
    return $all;
}
//文章数量查询
function sel_article_num($conn)
{
    $sql = "SELECT id FROM article";
    $select = mysqli_query($conn, $sql);
    if (!$select) {
        die("查询失败");
    }
    $num = mysqli_num_rows($select);
    return $num;
}
//查询所有用户
function sel_user_all($conn)
{
    $sql = "SELECT id,username,phone,createTime FROM info";
    $select = mysqli_query($conn, $sql);
    if (!$select) {
        die("查询失败");
    }
    $all = mysqli_fetch_all($select, MYSQLI_ASSOC);
    return $all;
}
//查询登录信息
function sel_login($conn, $data)
{
    $phone = $data['phone'];
    $pw = md5($data['pw']);
    $sql = "select id,username,phone from info where phone= '$phone' and pw= '$pw' ";
    $select = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($select);
    if ($num > 0) {
        $all = mysqli_fetch_all($select, MYSQLI_ASSOC);
        $_SESSION['loggedUsername'] = $all[0]['username'];
        echo "<script>alert('登陆成功');location.href='//zyhnb.top';</script>";
    } else {
        echo "<script>alert('用户名或密码错误');history.back();</script>";
    }
}
