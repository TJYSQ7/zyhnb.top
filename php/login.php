<?php session_start();
if (isset($_SESSION['loggedUsername'])) {
    header('Location: http://zyhnb.top');
    exit;
} ?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login.css">
    <script src="../js/checking.js"></script>
</head>

<body>
    <form action="../data/login.php" method="post" onsubmit="return loginCheck()">
        <h1>登录</h1>
        <input type="number" name="phone" placeholder="手机号" required>
        <input type="password" name="pw" placeholder="密码" required>
        <input type="submit" value="登录">
        <p>还没有账户 ？<a href="//zyhnb.top/php/register.php">注册</a></p>
    </form>
</body>

</html>