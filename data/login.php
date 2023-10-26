<?php
session_start();
$data = $_POST;
require '../common/function.php';
require '../common/check.php';
loginCheck($data);
$conn = connect();
login($conn, $data);
