<?php
require './pdo.php';
require '../data/content_list.php';
//测试
if ($stmt) {
    echo '<h1>连接成功</h1>';
} else {
    echo '<h1>连接失败</h1>';
}
