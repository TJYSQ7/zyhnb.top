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
                    <h2><?php echo $_SESSION['loggedUsername'] ?></h2>
                    <h3>♂️</h3>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="left">
                <ul>
                    <li><a href="">文章</a></li>
                    <li><a href="">文章</a></li>
                </ul>
                <div>
                    <?php require '../common/function.php';
                    require '../common/select.php';
                    $conn = connect();
                    $author = $_SESSION['loggedUsername'];
                    $all = sel_article_author($conn, $author) ?>
                    <table>
                        <tr>
                            <th>标题</th>
                            <th>操作</th>
                        </tr>
                        <?php foreach ($all as $row) { ?>
                            <tr>
                                <td><?= $row['title'] ?></td>
                                <td><a href="../data/article_change.php?id=<?= $row['id'] ?>">删除</a></td>
                            </tr>
                        <?php } ?>
                    </table>
                    <?php disconn($conn) ?>
                </div>
            </div>
            <div class="right">
                <div class="create_1">
                    <img src="../images/create.png" alt="">
                    <span>创作中心</span>
                </div>
                <div></div>
                <div class="create_3"><a href="./user_2.php">+开始创作</a></div>
            </div>
        </div>
        </div>
    </main>
</body>

</html>