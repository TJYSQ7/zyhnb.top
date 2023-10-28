<?php
$data = $_GET;
require '../../common/function.php';
require '../../common/change.php';
$conn = connect();
del_user($conn, $data);
disconn($conn);
