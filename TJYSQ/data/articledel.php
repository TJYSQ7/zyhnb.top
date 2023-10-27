<?php
$data = $_GET;
require '../../common/function.php';
$conn = connect();
delete($conn, 'article', $data);
