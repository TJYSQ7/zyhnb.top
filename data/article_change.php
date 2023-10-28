<?php
require '../common/check.php';
require '../common/function.php';
require '../common/change.php';
$conn = connect();
if ($_GET['author']) {
    $data = $_POST;
    $data['author'] = $_GET['author'];
    article_check($data);
    add_article($conn, $data);
} else {
    $data = $_GET;
    del_article($conn, $data);
}
disconn($conn);
