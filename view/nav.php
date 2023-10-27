<nav><!-- 导航栏 -->

    <a class="logo" href="//www.zyhnb.top">信条</a><!-- Logo区域 -->

    <ul class="nav-list"><!-- 列表区域 -->
        <li class="index"><a href="//zyhnb.top">首页</a></li>
        <li class="repository"><a href="//zyhnb.top/php/repository.php">知识库</a></li>
        <li class="AI"><a href="//zyhnb.top/php/AI.php">人工智障</a></li>
        <li class="shuqian"><a href="//zyhnb.top/php/shuqian.php">共享书签</a></li>
    </ul>

    <div class="search"><!-- 搜索区域 -->
        <input type="text" class="search-input" placeholder="搜索你感兴趣的内容..." />
        <button class="search-button">搜索</button>
    </div>

    <?php if (!isset($_SESSION['loggedUsername'])) { ?>
        <div class="login"><!-- 登录/注册 -->
            <a href="//zyhnb.top/php/login.php">登录</a>
            <span>|</span>
            <a href="//zyhnb.top/php/register.php">注册</a>
        </div>
    <?php }; ?>

    <?php if (isset($_SESSION['loggedUsername'])) { ?>
        <div class="dropdown"><!-- 用户区域 -->
            <a href="//zyhnb.top/php/user.php" class="dropbtn">
                <img src="//zyhnb.top/images/default.png" width="35px">
            </a>
            <div class="dropdown-content">
                <div class="dropdown-con">
                    <div class="triangle"></div>
                    <a href="//zyhnb.top/php/user.php">个人主页</a>
                    <a href="">内容管理</a>
                    <a href="//zyhnb.top/data/logout.php">退出登录</a>
                </div>
            </div>
        </div>
    <?php }; ?>

</nav>