<?php
namespace Admin\Controller;
use Think\Controller;
class Type4Controller extends Controller {

	//
	public function showlist(){
		$user=D('user');
		$res=$user->select();
		
		//
		
		$count=$user->count();//
		$page=new \Think\Page($count,3);//
		$page->setConfig('first','首页');
        $page->setConfig('last','最后一页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
		$show=$page->show();//
		//
		$res=$user->limit($page->firstRow.','.$page->listRows)->select();
		
		
		$this->assign('res',$res);
		$this->assign('page',$show);
		$this->display();
	}
    
	
	public function shanchu(){

     $id=I('id');
     $user=D('user');
     if($user->delete($id)){
     	$this->success('delete success!',U('showlist4'),0);
     }else{
				$this->error('delete false!');
			}
	}
	
	
}