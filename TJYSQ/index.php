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
    <div class="content"><!-- 内容区域 -->
        <a href="./test.php">测试连接</a>

        <?php require '../common/conn.php' ?><!-- 连接数据库 -->
        <?php require '../data/content_num.php' ?>
        <h1>目前共有：<?= $num ?>篇文章</h1>
        <?php require '../common/disconn.php' ?><!-- 断开连接 -->



    </div>
</body>

</html>