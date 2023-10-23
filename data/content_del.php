<?php
$title = $_POST['title'];
require '../common/conn.php';
$utf8 = mysqli_query($conn, "set names utf8mb4");
$sql = "delete from content_list where title='$title';";
$del = mysqli_query($conn, $sql);
if ($del) {
    echo '删除成功';
} else {
    echo '删除失败';
}
require '../common/disconn.php';
