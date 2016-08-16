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
            <span>&nbsp;用户&nbsp;->&nbsp;用户管理</span>
            
        </div>
        
       
 
<table class="table table-striped table-bordered table-hover">
   <thead>
     <tr>
       <th>id</th>
       <th>用户名</th>

       <th>Phone_Email</th>
       <th>密码</th>
        <th>是否是管理员</th>
       <th>操作</th>


     </tr>
   </thead>
   <!--显示出数据库里的相关表-->
   
   <tbody>
   <?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
       <td><?php echo ($vo["user_id"]); ?></td>
       <td><?php echo ($vo["user_name"]); ?></td>


       <td><?php echo ($vo["phone_email"]); ?></td>
       <td><?php echo ($vo["user_pwd"]); ?></td>
         <td><?php echo ($vo["user_mark"]); ?></td>
       <td><a href="/ThaiTravel/index.php/Admin/Type4/shanchu/id/<?php echo ($vo["user_id"]); ?>" onclick="return confirm('您确定要删除这个栏目吗？')">删除</a></td>
     </tr><?php endforeach; endif; else: echo "" ;endif; ?>
   </tbody>
   <tr>
   <td colspan="8" style="text-align:center; margin-left:10px;"><?php echo ($page); ?></td>
   </tr>

 </table>
    

    <div class="layout_footer"></div>

</body>
</html>