<?php
$data = $_GET;
require '../../common/function.php';
$conn = connect();
delete($conn, 'info', $data);
