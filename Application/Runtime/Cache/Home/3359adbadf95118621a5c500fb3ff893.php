<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>style.css" />
    <title>开启您的泰国之旅</title>
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
                            <li><a href="__MOUDLE__/Story/storylist">我们的故事</a></li>
                        </ul>
                    </li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">路线推荐 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/ThaiTravel/index.php/Home/Route/recommendthai">Thai推荐</a></li>

                        </ul>
                    </li>

                    <li><a href="/ThaiTravel/index.php/Home/Index/FAQ">常见问题</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="cover-head">
        <div class="container">
            <h1>注册</h1>
            <p>快创建属于你自己的账号，加入我们吧！</p>
        </div>
    </div>
</div>

<div class="sign-up" id="sign">
    <div class="container">

        <div class="fill-in col-md-12">
            <h3>User Information 用户信息</h3>
            <form action="/ThaiTravel/index.php/Home/User/register" method="post">
            <div class="userinfo">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <span>用户名<label>*</label></span>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-5">
                    <input type="text" name="user_name">

                </div>
                <p class="name-tips col-md-4 col-sm-4 col-xs-4"></p>
            </div>

            <div class="userinfo">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <span>手机<label>*</label></span>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-5">
                    <input type="text" name="phone_email">
                </div>
                <p class="info-tips col-md-4 col-sm-4 col-xs-4"></p>
            </div>

            <div class="userinfo">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <span>登录密码<label>*</label></span>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-5">
                    <input type="password" name="user_pwd">
                    <div class="strength">
                        <label><span class="now">弱</span><span>中</span><span>强</span></label>
                    </div>
                </div>
                <p class="pwd-tips col-md-4 col-sm-4 col-xs-4"></p>
            </div>

            <div class="userinfo">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <span>确认密码<label>*</label></span>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-5">
                    <input type="password" disabled="" >
                </div>
                <p class="pwd2-tips col-md-4 col-sm-4 col-xs-4"></p>
            </div>
            <input type="submit" class="btn btn-success center-block" value="Go!">
            </form>
        </div>


    </div>

</div>
<div class="clearfix">

</div>

<div class="divider"></div>

<div class="saying">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-5 col-xs-12">

            </div>
            <div class="col-md-8 col-sm-7 col-xs-12">
                <h1>What travelers are saying...</h1>
                <p>---“印象最好的一个国家，人民友善，物价便宜，性价比高，大海，人妖，寺庙，美食，独特的异国风情，甚是喜欢。最爱的地方是芭提雅。在泰国住五星级宾馆也毫无压力。”<br /> ---“感谢信仰让这个国家的人民都那么友善。一个有魅力的亚洲国家，就是在这里让我爱上了spa这个东西。”
                    <br/> ---“I love thailand 如果可以 好想在泰国生活一段时间，清迈 太美了 人们都好善良 好开心第一次出国就去了泰国，让我对我接下来的旅程有了更多的信心，走出去一点也不难！！！”
                </p>
            </div>
        </div>
    </div>
</div>

<div class="divider"></div>

<footer>
    <p>Copyright &copy;2016.Thai Travel All rights reserved.</p>
</footer>

<script src="<?php echo (HOME_JS_URL); ?>jquery-1.12.3.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo (HOME_JS_URL); ?>bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo (HOME_JS_URL); ?>style.js" type="text/javascript" charset="utf-8"></script>
</body>

</html>