<?php
$utf8 = mysqli_query($conn, "set names utf8mb4");
$sql = "SELECT * FROM content_list";
$select_1 = mysqli_query($conn, $sql);
$num = mysqli_num_rows($select_1);
