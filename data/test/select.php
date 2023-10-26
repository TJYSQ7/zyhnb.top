<?php
//连接数据库
require '../common/conn.php';
//查询
$sql = 'SELECT * FROM article';
$query = mysqli_query($conn, $sql);
//输出数据
while ($row = mysqli_fetch_array($query)) {
    echo $row['title'] . '</br>';
    echo $row['content'] . '</br>';
}
