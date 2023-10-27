<?php
require '../common/check.php';
require '../common/function.php';
$data = $_POST;
registerCheck($data);
$conn = connect();
usernameCheck($conn, $data);
insert($conn, 'info', $data);
