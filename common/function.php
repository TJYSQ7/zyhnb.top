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
//查询数据
function select($conn, $table, $type)
{
    //处理结果集
    if ($type == 'content') {
        if ($table == 'article') {
            $sql = "SELECT * FROM $table";
            $select = mysqli_query($conn, $sql);
            if (!$select) {
                die("查询失败");
            }
            $all = mysqli_fetch_all($select, MYSQLI_ASSOC);
            return $all;
        }
        if ($table == 'info') {
            $sql = "SELECT id,username,phone,createTime FROM $table";
            $select = mysqli_query($conn, $sql);
            if (!$select) {
                die("查询失败");
            }
            $all = mysqli_fetch_all($select, MYSQLI_ASSOC);
            return $all;
        }
    }
    if ($type == 'num') {
        $sql = "SELECT id FROM $table";
        $select = mysqli_query($conn, $sql);
        if (!$select) {
            die("查询失败");
        }
        $num = mysqli_num_rows($select);
        return $num;
    }
}
//插入数据
function insert($conn, $table, $data)
{
    if ($table == 'info') {
        //处理数据集
        $name = $data['name'];
        $pw = md5($data['pw']);
        $phone = $data['phone'];
        $time = time();
        $sql = "insert into $table values(NULL,'$name','$pw','$phone','$time')";
        $insert = mysqli_query($conn, $sql);
        if ($insert) {
            echo "<script>alert('数据插入成功');history.back();</script>";
        } else {
            echo "<script>alert('数据插入失败');history.back();</script>";
        };
    }
    if ($table == 'article') {
        //处理数据集
        $title = $data['title'];
        $content = $data['content'];
        $author = $data['author'];
        $time = time();
        $sql = "insert into $table values(NULL,'$title','$content','$author','$time');";
        $insert = mysqli_query($conn, $sql);
        if ($insert) {
            echo "<script>alert('数据插入成功');history.back();</script>";
        } else {
            echo "<script>alert('数据插入失败');history.back();</script>";
        };
    }
}
//删除数据
function delete($conn, $table, $data)
{
    if ($table == 'info') {
        //处理数据集
        $name = $data['name'];
        $sql = "delete from $table where username='$name'";
        $delete = mysqli_query($conn, $sql);
        if ($delete) {
            echo "<script>alert('数据删除成功');history.back();</script>";
        } else {
            echo "<script>alert('数据删除失败');history.back();</script>";
        };
    }
    if ($table == 'article') {
        //处理数据集
        $title = $data['title'];
        $sql = "delete from $table where title='$title'";
        $delete = mysqli_query($conn, $sql);
        if ($delete) {
            echo "<script>alert('数据删除成功');history.back();</script>";
        } else {
            echo "<script>alert('数据删除失败');history.back();</script>";
        };
    }
}
//登录
function login($conn, $data)
{
    $phone = $data['phone'];
    $pw = MD5($data['pw']);
    $sql = "select * from info where phone= '$phone' and pw= '$pw' ";
    $select = mysqli_query($conn, $sql);
    if (mysqli_num_rows($select) > 0) {
        $_SESSION['loggedUsername'] = $phone;
        echo "<script>alert('登陆成功');location.href='//zyhnb.top';</script>";
    } else {
        echo "<script>alert('用户名或密码错误');history.back();</script>";
    }
}
//退出登录
function logout()
{
    session_start();
    session_destroy();
    header('location://zyhnb.top');
}
//断开数据库连接
function close($conn)
{
    mysqli_close($conn);
}
