<?php
$utf8 = mysqli_query($conn, "set names utf8mb4");
$sql = 'SELECT * FROM content_list';
$select = mysqli_query($conn, $sql);
