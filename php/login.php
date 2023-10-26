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
        <table>
            <caption>登录</caption>
            <tr>
                <th>手机号:</th>
                <td><input type="number" name="phone" required></td>
            </tr>
            <tr>
                <th>密码:</th>
                <td><input type="password" name="pw" required></td>
            </tr>
            <tr>
                <th><input type="reset"></th>
                <td><input type="submit" value="登录"></td>
            </tr>
        </table>
    </form>
</body>

</html>