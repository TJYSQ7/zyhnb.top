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
        <div class="head">标题</div>

        <?php require '../common/conn.php' ?><!-- 连接数据库 -->
        <?php require '../data/content_list.php' ?>
        <?php while ($row = mysqli_fetch_array($select_1)) { ?>

            <div class="list"><?= $row['title'] ?></div>

        <?php }; ?>
        <form action="../data/content_del.php" method="post">
            <input type="text" name="title" placeholder="输入要删除的标题">
            <input type="submit" value="删除">
        </form>
        <?php require '../common/break.php' ?><!-- 断开连接 -->




    </div>
</body>

</html>