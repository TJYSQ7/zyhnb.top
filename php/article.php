<?php session_start();
$id = $_GET['id'] ?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>欢迎来到信条</title>
    <link rel="stylesheet" href="../css/html.css" />
    <link rel="stylesheet" href="../css/nav.css" />
    <link rel="stylesheet" href="../css/article.css" />
    <link rel="stylesheet" href="../css/media.css">
</head>

<body class="index">
    <?php require '../view/nav.php' ?><!-- 导航栏 -->
    <main><!-- 内容区域 -->
        <?php require '../common/function.php';
        require '../common/select.php';
        $conn = connect();
        $all = sel_article_one($conn, $id) ?>
        <article>
            <h1><?= $all['0']['title'] ?></h1>
            <h3>作者：<?= $all['0']['author'] ?></h3>
            <p><?= $all['0']['content'] ?></p>
            <h4>发布时间：<?= date('Y-m-d H:i:s', $all['0']['createTime']) ?></h4>
        </article>
        <?php disconn($conn) ?>
    </main>
</body>

</html>