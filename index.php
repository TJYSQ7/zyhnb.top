<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>信条，一个分享和交流的平台</title>
    <link rel="stylesheet" href="./css/html.css" />
    <link rel="stylesheet" href="./css/nav.css" />
    <link rel="stylesheet" href="./css/index.css" />
    <link rel="stylesheet" href="./css/media.css">
</head>

<body class="index">
    <?php require './view/nav.html' ?><!-- 导航栏 -->
    <div class="content"><!-- 内容区域 -->
        <div class="article"> <!-- 文章区域 -->
            <div class="box">
                <div><a href="./common/test.php">测试连接</a></div>
                <div><span></span></div>
            </div>





            <?php require './common/pdo.php'; ?><!-- 连接数据库 -->
            <?php require './data/content_list.php'; ?>
            <?php while ($row = $stmt->fetch()) { ?>

                <div class="box">
                    <div><a href="#"><?php echo $row['title']; ?></a></div>
                    <div><span><?php echo $row['abstract']; ?></span></div>
                </div>

            <?php }; ?>






            <hr>
            <?php require './view/footer.html' ?><!-- 底部区域 -->
        </div>
        <div class="sidebar"><!-- 侧边栏区域 -->
            <div class="hot-question"><!-- 其他区域 --></div>
            <hr>
            <?php require './view/footer.html' ?><!-- 底部区域 -->
        </div>
    </div>
</body>

</html>