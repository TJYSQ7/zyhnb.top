<?php
$utf8 = mysqli_query($conn, "set names utf8mb4");
$sql = 'SELECT * FROM info';
$select = mysqli_query($conn, $sql);
