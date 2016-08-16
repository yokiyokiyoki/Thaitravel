<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>style.css" />

    <title>个人信息</title>
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


                            <li><a href="/ThaiTravel/index.php/Home/Destination/desinterest.html">美丽风光</a></li>
                            <li><a href="/ThaiTravel/index.php/Home/Destination/despark.html">国家公园</a></li>

                        </ul>
                    </li>
                    <li><a href="activity.html">活动</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">概况 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php
 if($_SESSION['user_id']){ echo '<li><a href="/ThaiTravel/index.php/Home/Story/storythai">写游记</a></li>'; } ; ?>
                            <li><a href="/ThaiTravel/index.php/Home/Story/storyours">我们的故事</a></li>
                        </ul>
                    </li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">路线推荐 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/ThaiTravel/index.php/Home/Route/recommendthai">Thai推荐</a></li>

                        </ul>
                    </li>
                    <li><a href="/ThaiTravel/index.php/Home/Index/FAQ">常见问题</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">个人中心 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/ThaiTravel/index.php/Home/Index/edit">个人中心</a></li>
                            <li><a href="/ThaiTravel/index.php/Home/User/logout">注销登录</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="cover-head">
        <div class="container">
            <h1></h1>
            <p></p>
        </div>
    </div>
</div>
<div class="edit">
    <div class="personal-info center-block">

        <div class="option col-md-3 col-sm-12 col-xs-12">
            <ul>
                <li class="active grxx"><a>个人信息</a></li>

                <li class="youji"><a>游记</a></li>
                <li class="pinglun"><a>评论</a></li>
            </ul>
        </div>



        <div class="details col-md-9 col-sm-12 col-xs-12">

            <div class="details-title">
                <div class="photo">

                </div>
                <p><?php echo ($rst['user_name']); ?><br>ID:<?php echo ($user_id); ?></p>
            </div>


            <!--个人信息-->
            <div id="grxinxi">

                <div class="p-details" >
                    <div class="alert alert-danger center-block" role="alert">
                        <p>为了您的账户安全,请定期<a id="change" class="alert-link ">修改密码</a>。</p>
                    </div>

                    <div class="details-content ">
                        <div class="d-info">
                            <form action="/ThaiTravel/index.php/Home/Index/userchange" method="post">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <span>用户名</span>
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <input type="text" value="<?php echo ($rst['user_name']); ?>" name="user_name">
                            </div>
                        </div>

                        <div class="d-info">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <span>ID</span>                          <!--ID是自动生成的，用户不可更改。-->
                            </div>

                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <input type="text" disabled="true" value="<?php echo ($user_id); ?>" >
                            </div>
                        </div>



                        <div class="d-info">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <span>绑定手机</span>
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <input type="text" value="<?php echo ($rst['phone_email']); ?>" name="phone_email">
                            </div>
                        </div>
                        <input type="submit" class="btn btn-success center-block save" value="保存">

                        </form>
                        <div id="changepwd">
                            <div class="change">
                                <div class="d-info">
                                    <form action="/ThaiTravel/index.php/Home/User/changepwd" method="post">
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <span>原密码</span>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8">
                                        <input type="password" >
                                    </div>
                                </div>

                                <div class="d-info">
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <span>新密码</span>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8">
                                        <input type="password" name="user_pwd">
                                    </div>
                                </div>
                                <input type="submit" value="保存" class="btn btn-success save">

                                </form>
                                <a class="btn btn-success save">取消</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



            <!--游记-->
            <div id="youji1" style="display: none">
                <div class="st" >
                    <div class="st1"><p class="strongnum"><?php echo ($youjisum); ?></p>游记</div>
                    <div class="st1"><p class="strongnum">2</p>回复 </div>
                    <div class="st1"><a class="btn btn-success" href="/ThaiTravel/index.php/Home/Story/storythai">写游记</a></div><!--跳转故事列表-->
                </div>

                <?php if(is_array($youji)): foreach($youji as $key=>$vol): ?><div class="yj">
                    <div><a href="/ThaiTravel/index.php/Home/Story/storyours/id/<?php echo ($vol["id"]); ?>" class="yjtile"> <?php echo ($vol["title"]); ?></a></div>
                    <div class="yjtime"><?php echo ($vol["date"]); ?></div>
                    <div class="yjcontent"><?php echo ($vol["content"]); ?></div>
                </div>
                <div style="color:#1bbc9b;padding:10px;float: right;">展开</div><?php endforeach; endif; ?>
            </div>

            <!--评论-->
            <div id="comment" style="display: none">

                    <div class="st" >
                        <div class="st1"><p class="strongnum"><?php echo ($comsum); ?></p>评论</div>
                        <div class="st1"><p class="strongnum">2</p>点赞 </div>
                        <div class="st1"><a class="btn btn-success" href="/ThaiTravel/index.php/Home/Story/storylist">写评论</a></div><!--跳转故事列表-->
                    </div>
                    <?php if(is_array($rst1)): foreach($rst1 as $key=>$vo): ?><div class="pl">
                        <img src="<?php echo (HOME_IMG_URL); ?>3.jpg" class="img2"/>
                        <div class="tubiao" >
                            <div style="float: right;"><img src="<?php echo (HOME_IMG_URL); ?>cross.png"/></div>
                            <div style="float: right;"><span class="glyphicon glyphicon-pencil" href=""> </span></div>
                        </div>
                        <div ><a href="/ThaiTravel/index.php/Home/storyours/id/<?php echo ($vo["youji_id"]); ?>" class="yjtile"> 游记标题：<?php echo ($vo["youji_name"]); ?></a></div>
                        <div class="commentcontent"><?php echo ($vo["comment"]); ?></div>
                        <div class="yjtime" style="float: right;line-height: 45px;"><?php echo ($vo["date"]); ?> &nbsp;</div>
                        <div class="bgi">
                            <img src="<?php echo (HOME_IMG_URL); ?>frame.png"  />
                        </div>
                        <div class="clear" style="clear: both"></div>
                    </div><?php endforeach; endif; ?>

            </div>

    </div>
</div>
</div>





<script src="<?php echo (HOME_JS_URL); ?>jquery-1.12.3.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo (HOME_JS_URL); ?>style.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo (HOME_JS_URL); ?>bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    window.onload=function(){

        $('.grxx').click(function(){
            $('#comment').hide();
            $('#youji1').hide();
            $('#grxinxi').fadeIn();


        })
        $('.youji').click(function(){
            $('#comment').hide();
            $('#grxinxi').hide();
            $('#youji1').fadeIn();
        })
        $('.pinglun').click(function(){
            $('#grxinxi').hide();
            $('#youji1').hide();
            $('#comment').fadeIn();
        })
    }
</script>
</body>

</html>