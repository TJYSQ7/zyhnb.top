<?php session_start();
if ($_SESSION['loggedUsername'] != '奥特曼') {
    header('Location: http://zyhnb.top');
    exit;
} ?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/index.css">
</head>

<body class="a">
    <?php require './view/nav.html' ?>
    <main><!-- 内容区域 -->
        <?php require '../common/function.php';
        require '../common/select.php';
        $conn = connect();
        $num = sel_article_num($conn) ?>
        <h1>目前共有：<?= $num ?>篇文章</h1>
        <?php disconn($conn) ?>
    </main>
</body>

</html>