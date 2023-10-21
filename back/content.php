<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./nav.css">
    <link rel="stylesheet" href="./content.css">
</head>

<body class="b">
    <?php require './nav.html' ?>
    <div class="content"><!-- 内容区域 -->

        <?php require '../common/conn.php' ?><!-- 连接数据库 -->
        <?php require '../data/content_list.php' ?>
        <?php while ($row = mysqli_fetch_array($select_1)) { ?>


            <h3><?= $row['title'] ?></h3>
            <hr>

        <?php }; ?>
        <?php require '../common/break.php' ?><!-- 断开连接 -->




    </div>
</body>

</html>