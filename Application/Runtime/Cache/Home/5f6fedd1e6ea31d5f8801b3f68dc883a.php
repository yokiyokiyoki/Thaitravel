<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>style.css" />
    <title></title>
</head>

<body>
<div class="page-heading">

    <!--导航 -->
    <div class="navbar navbar-inverse navbar-static-top" role="navigation" id="menu-nav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">切换导航</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/ThaiTravel/index.php/Home/Index/index">ThaiTravel</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/ThaiTravel/index.php/Home/Index/index">首页</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">目的地 <span class="caret"></span></a>
                        <ul class="dropdown-menu">


                            <li><a href="/ThaiTravel/index.php/Home/Destination/desinterest">美丽风光</a></li>
                            <li><a href="/ThaiTravel/index.php/Home/Destination/despark">国家公园</a></li>

                        </ul>
                    </li>
                    <li><a href="/ThaiTravel/index.php/Home/Index/activity">活动</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">概况 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php
 if($_SESSION['user_id']){ echo '<li><a href="/ThaiTravel/index.php/Home/Story/storythai">写游记</a></li>'; } ; ?>

                            <li><a href="/ThaiTravel/index.php/Home/Story/storylist">我们的故事</a></li>
                        </ul>
                    </li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">路线推荐 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/ThaiTravel/index.php/Home/Route/recommendthai">Thai推荐</a></li>

                        </ul>
                    </li>

                    <li><a href="/ThaiTravel/index.php/Home/Index/FAQ">常见问题</a></li>
                    <?php
 if($_SESSION['user_id']){ echo '<li class="dropdown"  >'; echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown">个人中心 <span class="caret"></span></a>'; echo '<ul class="dropdown-menu">'; echo '<li><a href="/ThaiTravel/index.php/Home/Index/edit">个人中心</a></li>'; echo '<li><a href="/ThaiTravel/index.php/Home/User/logout">注销登录</a></li>'; echo '</ul>'; echo '</li>'; }else{ echo '<li><a href="/ThaiTravel/index.php/Home/User/login">登录</a></li>'; } ; ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="cover-head">
        <div class="container">
            <h1>我们的故事</h1>
            <p>用文字和图片，将你的旅行变成永久的记忆！</p>
        </div>
    </div>
</div>

<div class="travel-notes container">

    <div style="margin:0 150px 0 150px;">
        <form action="">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th colspan="6">
                        <div class="form-group">
                            <input type="text" class="form-control  " placeholder="请输入你要找的文章！">
                            <a href="#" class="glyphicon glyphicon-search">

                            </a>
                        </div>
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($rst)): foreach($rst as $key=>$k): ?><tr>
                    <td colspan="5"><a href="/ThaiTravel/index.php/Home/Story/storyours/id/<?php echo ($k["id"]); ?>" style="text-decoration: none;color: black"><?php echo ($k["title"]); ?></a></td>
                    <td style="text-align:right"><?php echo ($k["date"]); ?></td>
                </tr><?php endforeach; endif; ?>
                <thead>
                <tr>
                    <th><div><img src="<?php echo (HOME_IMG_URL); ?>1.png"/></div></th>
                    <th><div><img src="<?php echo (HOME_IMG_URL); ?>1.png"/></div></th>
                    <th><div><img src="<?php echo (HOME_IMG_URL); ?>1.png"/></div></th>
                    <th><div><img src="<?php echo (HOME_IMG_URL); ?>1.png"/></div></th>
                    <th><div><img src="<?php echo (HOME_IMG_URL); ?>1.png"/></div></th>
                    <th><div><img src="<?php echo (HOME_IMG_URL); ?>1.png"/></div></th>
                </tr>
                </thead>
                </tbody>
            </table>
        </form>
    </div>

</div>



<footer>
    <p>Copyright &copy;2016.Thai Travel All rights reserved.</p>
</footer>

<script src="<?php echo (HOME_JS_URL); ?>jquery-1.12.3.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo (HOME_JS_URL); ?>style.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo (HOME_JS_URL); ?>bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
</body>

</html>