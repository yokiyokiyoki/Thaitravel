//实现鼠标悬停时下拉菜单出现
$(document).ready(function() {
	$("li").has(".dropdown-menu").mousemove(function() {
		$(this).find("ul").slideDown(200);
	}).mouseleave(function() {
		$(this).find("ul").slideUp(100);
	});

	$(".info").mousemove(function() {
		$(this).find("p").stop()
			.fadeOut("slow");
	}).mouseleave(function() {
		$(this).find("p").stop()
			.fadeIn("slow");
	})

	$("#scroll-top").click(function() {
		$("html,body").animate({
			scrollTop: 0
		}, 400);
	})

	$("#change").click(function() {
		$("#changepwd").show(500);
	})
	$(".save").click(function() {
		$("#changepwd").fadeOut(500);
	})
	$(".cancel").click(function() {
		$("#changepwd").fadeOut(500);
	})

	$(".option li:eq(0)").click(function() {
		$(".option li:eq(1),.option li:eq(2),.option li:eq(3)").css({
			"backgroundColor": "white"
		});
		$(".option a:eq(1),.option a:eq(2),.option a:eq(3)").css({
			"color": "black"
		});

		$(".option li:eq(0)").css({
			"backgroundColor": "#0b696e"
		});
		$(".option a:eq(0)").css({
			"color": "white"
		});
		$(".p-details").fadeIn(300);
	})
	$(".option li:eq(1)").click(function() {
		$(".option li:eq(0),.option li:eq(2),.option li:eq(3)").css({
			"backgroundColor": "white"
		}).hover({
			"backgroundColor": "#4fb4bb"
		});

		$(".option a:eq(0),.option a:eq(2),.option a:eq(3)").css({
			"color": "black"
		});

		$(".option li:eq(1)").css({
			"backgroundColor": "#0b696e"
		});
		$(".option a:eq(1)").css({
			"color": "white"
		});
		$(".p-details").hide(200);
	})
	$(".option li:eq(2)").click(function() {
		$(".option li:eq(0),.option li:eq(1),.option li:eq(3)").css({
			"backgroundColor": "white"
		});
		$(".option a:eq(0),.option a:eq(1),.option a:eq(3)").css({
			"color": "black"
		});

		$(".option li:eq(2)").css({
			"backgroundColor": "#0b696e"
		});
		$(".option a:eq(2)").css({
			"color": "white"
		});
		$(".p-details").fadeOut(200);
	})
	$(".option li:eq(3)").click(function() {
		$(".option li:eq(0),.option li:eq(2),.option li:eq(1)").css({
			"backgroundColor": "white"
		});
		$(".option a:eq(0),.option a:eq(2),.option a:eq(1)").css({
			"color": "black"
		});

		$(".option li:eq(3)").css({
			"backgroundColor": "#0b696e"
		});
		$(".option a:eq(3)").css({
			"color": "white"
		});
		$(".p-details").fadeOut(200);
	})
	
	$('.glyphicon-heart').click(function(){
		$(this).css("color","red");
	})
	$('.note-comment .glyphicon-chevron-down').click(function(){
		$(this).hide();
		$('.glyphicon-chevron-up').show();
		$('.comment').slideDown(300);
	})
	$('.note-comment .glyphicon-chevron-up').click(function(){
		$(this).hide();
		$('.glyphicon-chevron-down').show();
		$('.comment').slideUp(300);
	})
	$('.comment a').click(function(){
		$(this).parent().slideUp(300);
	})

});

//控制返回顶部按钮的出现距离
var bodyH = document.documentElement.clientHeight;
var toTop = document.getElementById("scroll-top");
window.onscroll = function() {
	var sTop = document.documentElement.scrollTop || document.body.scrollTop;
	if (sTop >= bodyH) {
		toTop.style.display = "block";
	} else {
		toTop.style.display = "none";
	}
}

//表单验证
window.onload = function() {
	var sign = document.getElementById('sign');
	var aInput = sign.getElementsByTagName('input');
	var oName = aInput[0];
	var oInfo = aInput[1];
	var oPwd = aInput[2];
	var oPwd2 = aInput[3];
	var nameTips = sign.getElementsByTagName('p')[0];
	var infoTips = sign.getElementsByTagName('p')[1];
	var pwdTips = sign.getElementsByTagName('p')[2];
	var pwd2Tips=sign.getElementsByTagName('p')[3];
	var strength = sign.getElementsByClassName('strength')[0];
	var judge = strength.getElementsByTagName('span');
	
	//用户名可用字符：数字、字母（不区分大小写）、汉字、下划线

	//用户名
	oName.onfocus=function(){
		nameTips.innerHTML='请输入用户名';
	}
	oName.onblur = function() {
		//含有非法字符；
		var re = /[^\w\u4e00-\u9fa5]/g; //选取所有非法字符  \u4e00-\u9fa5代表汉字；
		if (re.test(this.value)) {
			nameTips.innerHTML = '<img src="../../../Public/Home/img/cross.png">&nbsp含有非法字符';
		}
		//不能为空；
		else if (this.value == "") {
			nameTips.innerHTML = '<img src="../../../Public/Home/img/cross.png">&nbsp用户名不能为空';
		}
		//长度超过25个字符；
		else if (this.value.length > 25) {
			nameTips.innerHTML = '<img src="../../../Public/Home/img/cross.png">&nbsp超出25个字符';
		} else if (this.value.length < 5) {
			nameTips.innerHTML = '<img src="../../../Public/Home/img/cross.png">&nbsp少于5个字符';
		} else {

			nameTips.innerHTML = '<img src="../../../Public/Home/img/tick.png">';
		}
	}
	
	oInfo.onblur=function(){
		if(this.value==""){
			infoTips.innerHTML='<img src="../../../Public/Home/img/cross.png">&nbsp请输入有效信息';
		}
		else{
			infoTips.innerHTML='<img src="../../../Public/Home/img/tick.png">';
		}
	}
	 //密码
    oPwd.onkeyup=function(){
    	
    	//中
    	if(this.value.length>7){
    		judge[1].className='now';
    		oPwd2.removeAttribute('disabled');
    		pwd2Tips.innerHTML='请再次输入密码';
    	}else{
    		judge[1].className='';
    		oPwd2.setAttribute('disabled','');
    		pwd2Tips.innerHTML='';
    	}
    	
    	//强
    	if(this.value.length>11){
    		judge[2].className='now';
    		oPwd2.removeAttribute('disabled');
    		
    	}else{
    		judge[2].className='';
    		
    	}
    	
    }
    
    oPwd.onblur=function(){
    	
    	var reNumber=/[^\d]/g;     //表示全部数字以外的字符；
    	var reLetter=/[^a-zA-Z]/g; //表示全部字母以外的字符；
    	//密码不能为空
    	if(this.value==""){
    		pwdTips.innerHTML='<img src="../../../Public/Home/img/cross.png">&nbsp密码不能为空';
    	}
    	//长度应为6-16个字符
    	else if(this.value.length < 6 || this.value.length > 16){
    		pwdTips.innerHTML='<img src="../../../Public/Home/img/cross.png">&nbsp长度应为6-16个字符';
    	}
    	//不能全为数字
    	else if(!reNumber.test(this.value)){
    		pwdTips.innerHTML='<img src="../../../Public/Home/img/cross.png">&nbsp不能全为数字';
    	}
    	//不能全为字母
    	else if(!reLetter.test(this.value)){
    		pwdTips.innerHTML='<img src="../../../Public/Home/img/cross.png">&nbsp不能全为字母';
    	}
    	else{
    		pwdTips.innerHTML='<img src="../../../Public/Home/img/tick.png">';
    	}
    }
    
    //确认密码
    oPwd2.onkeyup=function(){
    	if(this.value!=oPwd.value){
    		pwd2Tips.innerHTML='<img src="../../../Public/Home/img/cross.png">&nbsp密码不一致';
    	}
    	else{
    		pwd2Tips.innerHTML='<img src="../../../Public/Home/img/tick.png">';
    	}
    }
}

   
    
