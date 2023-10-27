<?php
$data = $_POST;
$data['author'] = $_GET['author'];
require '../common/check.php';
require '../common/function.php';
articleCheck($data);
$conn = connect();
insert($conn, 'article', $data);
