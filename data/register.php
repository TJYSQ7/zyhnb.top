<?php
require '../common/check.php';
require '../common/function.php';
require '../common/change.php';
$data = $_POST;
register_check($data);
$conn = connect();
username_check($conn, $data);
add_user($conn, $data);
