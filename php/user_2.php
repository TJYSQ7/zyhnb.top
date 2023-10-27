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
    <link rel="stylesheet" href="../css/user_2.css">
    <script src="../js/checking.js"></script>
</head>

<body>
    <?php require '../view/nav.php' ?>
    <main>
        <div class="top">
            <div class="background"></div>
            <div class="main">
                <img src="../images/default.png" alt="">
                <div class="info">
                    <h2><?php echo $_SESSION['loggedUsername'] ?></h2>
                    <h3>♂️</h3>
                </div>
            </div>
        </div>
        <div class="bottom">
            <form onsubmit="return articleCheck()" method="post" action="../data/article_add.php?author=<?= $_SESSION['loggedUsername'] ?>">
                <input type="text" name=" title" placeholder="请输入标题" required>
                <textarea name="content" cols="80" rows="24" placeholder="请输入内容" required></textarea>
                <input type="submit">
                <input type="reset" value="清空">
            </form>
        </div>
    </main>
</body>

</html>