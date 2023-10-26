<?php session_start();
if (!isset($_SESSION['loggedUsername'])) {
    header('Location: http://zyhnb.top');
    exit;
} ?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/html.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/user.css">
</head>

<body>
    <?php require '../view/nav.php' ?>
    <main>
        <div class="top">
            <div class="background"></div>
            <div class="main">
                <img src="../images/default.png" alt="">
                <div class="info">
                    <h2>amazing</h2>
                    <h3><?php echo $_SESSION['loggedUsername'] ?></h3>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="left">
                <ul>
                    <li><a href="">文章</a></li>
                    <li><a href="">文章</a></li>
                </ul>
                <form method="post" action="../data/article_add.php">
                    标题：
                    <input name="title" type="text" placeholder="请输入标题">
                    <br>
                    摘要：
                    <textarea name="content" id="" cols="30" rows="10"></textarea>
                    <br>
                    <input type="submit">
                    <input type="reset">
                </form>
            </div>
            <div class="right">
                <div class="create_1">
                    <img src="../images/create.png" alt="">
                    <span>创作中心</span>
                </div>
                <div></div>
                <div class="create_3"><a href="">+开始创作</a></div>
            </div>
        </div>
        </div>
    </main>
</body>

</html>