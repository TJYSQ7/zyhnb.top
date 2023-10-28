<?php session_start();
if ($_SESSION['loggedUsername'] != '奥特曼') {
    header('Location: http://zyhnb.top');
    exit;
} ?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/content.css">
</head>

<body class="c">
    <?php require './view/nav.html' ?>
    <div class="content"><!-- 内容区域 -->
        <?php require '../common/function.php';
        require '../common/select.php';
        $conn = connect();
        $all = sel_user_all($conn) ?>
        <table>
            <caption>用户管理</caption>
            <tr>
                <th>id</th>
                <th>用户</th>
                <th>手机号</th>
                <th>操作</th>
            </tr>
            <?php foreach ($all as $row) { ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['username'] ?></td>
                    <td><?= $row['phone'] ?></td>
                    <td><a href="./data/userdel.php?id=<?= $row['id'] ?>">删除</a></td>
                </tr>
            <?php }; ?>
        </table>
        <?php disconn($conn) ?>
    </div>
</body>

</html>