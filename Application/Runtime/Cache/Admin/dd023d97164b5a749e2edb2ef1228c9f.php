<?php if (!defined('THINK_PATH')) exit();?>﻿<html>
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>后台登录(Login)</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo (ADMIN_CSS_URL); ?>reset.css">
        <link rel="stylesheet" href="<?php echo (ADMIN_CSS_URL); ?>supersized.css">
        <link rel="stylesheet" href="<?php echo (ADMIN_CSS_URL); ?>style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="<?php echo (ADMIN_JS_URL); ?>html5.js"></script>
        <![endif]-->

    </head>

    <body style="background:url(<?php echo (ADMIN_IMG_URL); ?>/1.jpg)">

        <div class="page-container">
            <h1 >ThaiTravel后台登录</h1>
            <form action="/ThaiTravel/index.php/Admin/User/login" method="post">
                <input type="text" name="user" class="username" placeholder="请输入您的用户名！">
                <input type="password" name="password" class="password" placeholder="请输入您的用户密码！">
                <input type="Captcha" class="Captcha" name="Captcha" placeholder="请输入验证码！">
				<img width=160px height=46px style="margin-top:23px;margin-left:40px" src="/ThaiTravel/index.php/Admin/User/code" alt=""  onclick=this.src="/ThaiTravel/index.php/Admin/User/code/"+Math.random() style="cursor:pointer;" title="看不清？点击更换另一个验证码."/>
                <button type="submit" class="submit_button">登录</button>
                <div class="error"><span>+</span></div>
            </form>
        </div>
		
        <!-- Javascript -->
        <script src="<?php echo (ADMIN_JS_URL); ?>jquery-1.8.2.min.js" ></script>
        <script src="<?php echo (ADMIN_JS_URL); ?>supersized.3.2.7.min.js" ></script>
        <script src="<?php echo (ADMIN_JS_URL); ?>supersized-init.js" ></script>
        <script src="<?php echo (ADMIN_JS_URL); ?>scripts.js" ></script>

        

    </body>
<div style="text-align:center;">

</div>
</html>