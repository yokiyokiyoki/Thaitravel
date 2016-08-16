<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    
    //加载后台框架首页
    public function index(){
	$this->display();
    }

     //加载后台框架头部
    public function top(){
        $username=session('username');
        $this->assign('username',$username);
        
        $this->display();
    }

    //加载后台框架左部
    public function left(){
    $this->display();
    }

    //加载后台框架右部
    public function right(){
    $this->display();
    }
}