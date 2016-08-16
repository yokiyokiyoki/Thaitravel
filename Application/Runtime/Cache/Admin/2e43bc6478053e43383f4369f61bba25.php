<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<link rel="stylesheet" href="<?php echo (ADMIN_CSS_URL); ?>index.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php echo (ADMIN_CSS_URL); ?>bootstrap.min.css">
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>jquery.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>tendina.min.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>common.js"></script>

</head>
<body>
   

        <div class="route_bg">
            <span>&nbsp;活动&nbsp;->&nbsp;活动管理</span>
            <a href="/ThaiTravel/index.php/Admin/Type1/tianjia1" style="float:right;margin:0px 10px 0px 0px;">添加活动</a> &nbsp;&nbsp;
            <!--<form action="" style="float:right;margin-right:600px;">
                <input type="text" /> &nbsp;
                <input type="submit" value="show" />
            </form>-->
        </div>
        
       
 
<table class="table table-striped table-bordered table-hover">
   <thead>
     <tr>
       <th>id</th>
       <th>活动名称</th>
       <th>图片</th>
         <th>缩略图</th>
       <th>时间</th>
       <th>内容</th>
       <th>操作</th>
       <th>操作</th>

     </tr>
   </thead>
   <!--显示出数据库里的相关表-->
   
   <tbody>
   <?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
       <td><?php echo ($vo["id"]); ?></td>
       <td><?php echo ($vo["atname"]); ?></td>
       <td><?php echo (UPLOAD_URL); ?>/<?php echo ($vo["image"]); ?></td>
         <td><img src="<?php echo (UPLOAD_URL); ?>/<?php echo ($vo["image"]); ?>" alt="" width="60px" height="60px"></td>
       <td><?php echo ($vo["date"]); ?></td>
       <td><?php echo ($vo["content"]); ?></td>
       <td><a href="/ThaiTravel/index.php/Admin/Type1/shanchu1/id/<?php echo ($vo["id"]); ?>" onclick="return confirm('您确定要删除这个栏目吗？')">删除</a></td>
       <td><a href="/ThaiTravel/index.php/Admin/Type1/xiugai1/id/<?php echo ($vo["id"]); ?>">更改</a></td>
     </tr><?php endforeach; endif; else: echo "" ;endif; ?>
   </tbody>
   <tr>
   <td colspan="8" style="text-align:center; margin-left:10px;"><?php echo ($page); ?></td>
   </tr>

 </table>
    

    <div class="layout_footer"></div>

</body>
</html>