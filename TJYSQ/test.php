<?php
//1.连接数据库
//2.选择数据库
require '../common/conn.php';

//测试
if (!$conn) {
    die("连接数据库服务器失败");
} else {
    echo '数据库连接成功<br><br>';
}

//设置字符集
$utf8 = mysqli_query($conn, "set names utf8mb4");
if (!$utf8) {
    die("字符集设置失败");
} else {
    echo '字符集设置成功<br><br>';
}

//3.执行sql语句
$sql = "SELECT * FROM content_list";
$select_1 = mysqli_query($conn, $sql);



//4.处理结果集
while ($row = mysqli_fetch_array($select_1)) {
    echo "标题:" . $row['title'] . "<br>";
    echo "摘要:" . $row['abstract'] . "<br>";
}

$num = mysqli_num_rows($select_1);
echo '查询结果为：' . $num . '条记录';

//5.释放资源与关闭连接
mysqli_close($conn);
