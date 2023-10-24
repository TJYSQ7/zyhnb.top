<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/content.css">
</head>

<body class="d">
    <?php require './view/nav.html' ?>
    <div class="content"><!-- 内容区域 -->


        <?php require '../common/conn.php' ?><!-- 连接数据库 -->
        <?php require '../data/info_list.php' ?>
        <table>
            <caption>用户管理</caption>
            <tr>
                <th>id</th>
                <th>用户</th>
                <th>手机号</th>
                <th>操作</th>
            </tr>
            <?php while ($row = mysqli_fetch_array($select)) { ?>

                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['username'] ?></td>
                    <td><?= $row['phone'] ?></td>
                    <td>2</td>
                </tr>

            <?php }; ?>
        </table>
        <form action="../data/content_del.php" method="post">
            <input type="text" name="title" placeholder="输入要删除的标题">
            <input type="submit" value="删除">
        </form>
        <?php require '../common/disconn.php' ?><!-- 断开连接 -->




    </div>
</body>

</html>