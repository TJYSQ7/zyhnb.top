<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/add.css">
</head>

<body class="c">
    <?php require './view/nav.html' ?>
    <div class="content"><!-- 内容区域 -->



        <form method="post" action="../data/content_add.php">
            标题：
            <input name="title" type="text" placeholder="请输入标题">
            <br>
            摘要：
            <textarea name="abstract" id="" cols="30" rows="10"></textarea>
            <br>
            <input type="submit">
            <input type="reset">
        </form>



    </div>
</body>

</html>