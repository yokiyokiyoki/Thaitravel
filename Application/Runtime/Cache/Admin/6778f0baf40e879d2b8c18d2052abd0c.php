<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<link rel="stylesheet" href="<?php echo (ADMIN_CSS_URL); ?>index.css" type="text/css" media="screen">
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>jquery.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>tendina.min.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>common.js"></script>

</head>
<body>
    <div class="layout_left_menu" style="min-height: 98%;">
        <ul class="tendina" id="menu">
            <li class="childUlLi opened">
                <a href="/ThaiTravel/index.php/Admin/Type/showlist" target="right" id="bd" style="border-top: 1px solid #4D4D4D">我们的故事</a>
            </li>
            
            <li class="childUlLi opened">
                <a href="/ThaiTravel/index.php/Admin/Type1/showlist1" target="right" id="bd">活动</a>
            </li>

            <li class="childUlLi opened">
                <a href="/ThaiTravel/index.php/Admin/Type2/showlist2" target="right" id="bd">美丽风光</a>
            </li>
            
            <li class="childUlLi opened">
                <a href="/ThaiTravel/index.php/Admin/Type3/showlist3" target="right" id="bd">国家公园</a>
            </li>
            <li class="childUlLi opened">
                <a href="/ThaiTravel/index.php/Admin/Type5/showlist" target="right" id="bd">Thai推荐</a>
            </li>
            <li class="childUlLi opened">
                <a href="/ThaiTravel/index.php/Admin/Comment/showlist" target="right" id="bd">评论管理</a>
            </li>
            <li class="childUlLi opened">
                <a href="/ThaiTravel/index.php/Admin/Type4/showlist" target="right" id="bd">用户管理</a>
            </li>
            
            <li class="childUlLi opened">
                <a href="role.html" target="right " id="bd> 管理员管理</a>
            </li>
        </ul>
    </div>
  
    

</body>
</html>