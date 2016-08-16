<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>style.css" />
    <title>精彩活动 在泰国</title>
    <style type="text/css">
        .massage .img{
            background: url(<?php echo (UPLOAD_URL); echo ($rst[0]["image"]); ?>) no-repeat;
            background-size: contain;

        }
        .boxing .img{
            background: url(<?php echo (UPLOAD_URL); echo ($rst[1]["image"]); ?>) no-repeat;
            background-size: contain;
        }
        .riding .img{
            background: url(<?php echo (UPLOAD_URL); echo ($rst[2]["image"]); ?>) no-repeat ;
            background-size: contain;

        }
    </style>
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
                    <li class="active"><a href="/ThaiTravel/index.php/Home/Index/activity">活动</a></li>
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
            <h1>活动</h1>
            <p>泰国充满各种各样的精彩。规划假日最难的一步，就是决定首先体验哪一种精彩！</p>
        </div>
    </div>
</div>

<div class="activity">
    <div class="container">
        <div class="massage">
            <div class="title">
                <h2><?php echo ($rst[0]["atname"]); ?></h2>
                <h3>Massage</h3>
            </div>
            <div class="col-md-6 img">

            </div>
            <div class="col-md-6 text">
                <p><?php echo ($rst[0]["content"]); ?>
                </p>
                <span>另外两家不错的按摩店是Asia Herb Association(09:00-次日2:00，电话：08 51140123，有三个分店，都在素坤逸大街）和Ruen-Nuad Massage Studio(Soi Convent 2, Silom, 靠近轻轨BTS Sala Daeng站）</span>
            </div>
        </div>

        <div class="act divider"></div>

        <div class="boxing">
            <div class="title">
                <h2><?php echo ($rst[1]["atname"]); ?></h2>
                <h3>Boxing Stadium</h3>
            </div>

            <div class="col-md-6 text">
                <p><?php echo ($rst[1]["content"]); ?>
                </p>


            </div>
            <div class="col-md-6 img">

            </div>
        </div>

        <div class="act divider"></div>

        <div class="riding">
            <div class="title">
                <h2><?php echo ($rst[2]["atname"]); ?></h2>
                <h3>Elephant Riding</h3>
            </div>
            <div class="col-md-6 img">

            </div>
            <div class="col-md-6 text">
                <p><?php echo ($rst[2]["content"]); ?>
                </p>
						<span>门票：一头大象一小时1200B，两人一头。另还要付200B每人的门票，门票包含看大象表演等。 <br />
						                  地址：Soi 9, Th Nimmanhaemin<br />
						                  交通：跟团包含接送，也可租双条车前往，大约600铢。<br />
						                  贴士：参加这个活动跟团比较便宜，一日游约800铢左右，视具体项目而定，含酒店接送及午餐。</span>

            </div>
        </div>

    </div>

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