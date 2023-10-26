<?php
$date = $_POST;
require '../common/function.php';
$conn = connect();
insert($conn, 'article', $date);
