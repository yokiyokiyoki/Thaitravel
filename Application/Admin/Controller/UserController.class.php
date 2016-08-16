<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    
	public function login(){
	
	if(IS_POST){
    //获取验证码，用户名和密码
    $user=I('user');
    $password=I('password');
    $captcha=I('Captcha');
    //验证，注意顺序
    //先检查验证码
    $verify = new \Think\Verify(); 
    if(!$verify->check($captcha)){
    	$this->error('验证码错误');
    	return;
    }
    //再来验证用户名和密码，此处需要调用MODEL来完成
    if(D('User')->checklogin($user,$password)){

        $this->success('登录成功!',U('Index/index'),0);
        session('username',$user);
    }else{

    	$this->error('登录失败！');
    }


    return;
	} 



	$this->display();
	
    }
	
	//定义生成验证码的函数
	public function code(){
		$Verify = new \Think\Verify();
		$Verify->fontSize = 80;
		$Verify->length   = 4;
        $Verify->entry();
		
	}
}