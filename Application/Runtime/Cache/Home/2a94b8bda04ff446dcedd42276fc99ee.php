<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>style.css" />
		
		<script src="<?php echo (HOME_JS_URL); ?>jquery-1.12.3.min.js" type="text/javascript" charset="utf-8"></script>

		<title>Trip your Trip私人旅游定制服务</title>
	</head>

	<body>
		<div class="banner">

			
			<!--<div class="banner-login">
				<a href="">登录</a>
			</div>-->

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
							<li class="active"><a href="/ThaiTravel/index.php/Home/Index/index">首页</a></li>
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
			

			<div class="info">
				<div class="container move">
					<h2>Trip your Trip</h2>
				    <p>泰国旅游订制</p>
				</div>
				
			</div>
			

		</div>
		<div class="best">
			<div class="container">
				<article>
					<div class="row">

						<div class="col-md-4"><img src="<?php echo (HOME_IMG_URL); ?>10.jpg" alt=placeholder""/></div>
						<div class="col-md-8">
							<h2><span>Best Thailand </span>For You</h2>
							<p>泰国是亚洲重要的旅游国家之一，是一个历史悠久的佛教国家，这个被称为“白象王国”的美丽国度，拥有独特的文化传统和民族风俗，如丰富多彩的各种节日，水上人家的清新生活，闻名于世的古典舞和民族舞，别具一格的泰拳、斗鸡、玩鱼和美丽的人妖等，都令人“乐不思蜀”。这里到处是金碧辉煌、尖角高耸的庙宇、佛塔，无处不有精致美观的佛像、石雕和绘画，这些在长年青绿的椰林掩映下的古迹，为泰国妖媚动人的热带风光增添了无限绚丽的色彩。</p>

						</div>

					</div>
				</article>
			</div>

		</div>
		
		<div class="service">
			<div class="container">
				<h1>泰国旅游注意事项<span>Details</span></h1>
				<div class="row">
					<div class="col-md-6 services-grids">
					<ul class="left">
						<li>护照签证；</li>
						<li>不能随身携带上飞机的物品；</li>
						<li>电压和中国一样；</li>
					</ul>
				</div>
				<div class="col-md-6 services-grids">
					<ul class="right">
						<li>手机卡需要开通国际漫游方可使用；</li>
						<li>泰国道路靠左行驶；</li>
						<li>泰国时间比北京时间慢一小时；</li>
					</ul>
				</div>
				</div>
				
			</div>

		</div>
		
		<footer>
			<p>Copyright &copy;2016.Thai Travel All rights reserved.</p>
		</footer>
		
		<script type="text/javascript">
			$(document).ready(function(){
				$("li").has(".dropdown-menu").mousemove(function(){
					$(this).find("ul").slideDown(200);
				}).mouseleave(function(){
					$(this).find("ul").slideUp(100);
				})
			});
		</script>
		

		
		<script src="<?php echo (HOME_JS_URL); ?>bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
		
	</body>

</html>