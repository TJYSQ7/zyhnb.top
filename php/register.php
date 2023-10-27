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
    <form action="../data/register.php" method="post" onsubmit="return registerCheck()">
        <h1>注册</h1>
        <p>Signup now and get full access to our app.</p>
        <input type="text" name="name" placeholder="用户名" required>
        <input type="password" name="pw" placeholder="密码" required>
        <input type="password" name="cpw" placeholder="确认密码" required>
        <input type="number" name="phone" placeholder="手机号" required>
        <input type="submit">
        <p>已经有账户了吗 ？ <a href="//zyhnb.top/php/login.php">登录</a></p>
    </form>
</body>

</html>