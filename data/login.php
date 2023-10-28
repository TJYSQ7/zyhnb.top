<?php
session_start();
$data = $_POST;
require '../common/check.php';
require '../common/function.php';
require '../common/select.php';
login_check($data);
$conn = connect();
sel_login($conn, $data);
