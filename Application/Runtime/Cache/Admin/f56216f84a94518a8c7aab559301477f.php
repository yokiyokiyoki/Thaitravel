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
            <span>&nbsp;活动列表&nbsp;->&nbsp;活动修改</span>
            <a href="/ThaiTravel/index.php/Admin/Type1/showlist1" style="float:right;margin:0px 10px 0px 0px;">返回</a> &nbsp;&nbsp;
        </div>
		
<form action="" method="post" enctype="multipart/form-data">
<table class="table table-bordered">
   <thead>
     <tr>

       <td>活动名称</td>
       <td colspan="2"><input type="text" name="atname" value="<?php echo ($atname); ?>" /></td>
       <input type="hidden" name="id" value="<?php echo ($id); ?>">
     </tr>
   </thead>
   <tbody>
     <tr>
       <td>时间</td>
       <td colspan="2"><input type="text" name="date" value= "<?php echo ($date); ?>" /></td>
       
     </tr>
     <tr>
        
       <td>图片</td>
       <td colspan="2"><img src="<?php echo (UPLOAD_URL); echo ($img); ?>" width="50px"height="50px" alt="">
           <input type="file" name="image" value="<?php echo ($image); ?>" /></td>
       
     
     </tr>
     
    <tr>
        
       <td>内容</td>
       <td colspan="2">

           <textarea name="content"  id="" cols="60" rows="10"><?php echo ($content); ?></textarea>
       </td>
       
     
     </tr>
     <tr>
        
       <td colspan="3" style="text-align:center">
           <input type="submit" value="修改" />
       </td>
       
       
     </tr>
   </tbody>
 </table>
</form>
</body>
</html>