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
        <?php require '../common/function.php' ?>
        <?php $conn = connect();
        $all = article($conn, $id) ?>
        <article>
            <h1><?= $all['0']['title'] ?></h1>
            <p><?= $all['0']['content'] ?></p>
        </article>
    </main>
</body>

</html>