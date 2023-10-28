<?php session_start(); ?>
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
    <?php require './view/nav.php' ?><!-- 导航栏 -->
    <main><!-- 内容区域 -->
        <article> <!-- 文章列表 -->
            <div class="box"></div>
            <?php require './common/function.php';
            require './common/select.php';
            $conn = connect();
            $all = sel_article_all($conn)
            ?>
            <?php foreach ($all as $row) { ?>
                <div class="box">
                    <div><a href="//zyhnb.top/php/article.php?id=<?php echo $row['id'] ?>"><?php echo $row['title']; ?></a></div>
                    <div><span><?php echo substr($row['content'], 0, 170) . '......'; ?></span></div>
                </div>
            <?php } ?>
            <?php disconn($conn) ?>
            <hr>
            <?php require './view/footer.html' ?><!-- 底部区域 -->
        </article>
        <aside><!-- 侧边栏 -->
            <div class="hot-question"><!-- 其他区域 --></div>
            <hr>
            <?php require './view/footer.html' ?><!-- 底部区域 -->
        </aside>
    </main>
</body>

</html>