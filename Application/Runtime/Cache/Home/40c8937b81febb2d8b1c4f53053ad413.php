<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>style.css" />
    <title>国家公园 在泰国</title>
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
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">目的地 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/ThaiTravel/index.php/Home/Destination/desmap">目的地与地图</a></li>

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
                    <li class="dropdown">
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
            <h1>国家公园</h1>
        </div>
    </div>
</div>

<div class="Angthong container">

    <div class="row">
        <div class="col-md-6  left">
            <img src="<?php echo (HOME_IMG_URL); ?>anthong.jpeg" alt="placeholder"/>
        </div>
        <div class="col-md-6 ">
            <h4><?php echo ($rst[0]["gdname"]); ?>  <br/><?php echo ($rst[0]["en_name"]); ?></h4>
            <p><?php echo ($rst[0]["content"]); ?>
            </p>
        </div>
    </div>

</div>

<div class="proverb">


    <div class="col-xs-6 left">
        <h5>Travel will enhance romance and adventure.</h5>
        <span>旅行能加强浪漫气息和冒险意味。</span>
    </div>
    <div class="col-xs-6 right">
        <div class="cover">

        </div>
    </div>

</div>

<div class="Maenam container">

    <div class="row">
        <div class="col-md-6">
            <h4><?php echo ($rst[1]["gdname"]); ?> <?php echo ($rst[1]["en_name"]); ?> </h4>
            <p><?php echo ($rst[1]["content"]); ?></p>
        </div>
        <div class="col-md-6">
            <img src="<?php echo (HOME_IMG_URL); ?>3.jpg"/>
        </div>
    </div>

</div>

<div class="ad">
    <p>Last year more than <span>160,000,000travelers</span> go to Thailand around the world!</p>
</div>

<div id="scroll-top">
    <a href="#"></a>
</div>

<footer>
    <p>Copyright &copy;2016.Thai Travel All rights reserved.</p>
</footer>

<script src="<?php echo (HOME_JS_URL); ?>jquery-1.12.3.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo (HOME_JS_URL); ?>style.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo (HOME_JS_URL); ?>bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>