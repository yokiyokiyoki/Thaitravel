<?php
/**
 * Created by PhpStorm.
 * User: 友杰
 * Date: 2016/6/17
 * Time: 12:43
 */
namespace Admin\Controller;
use Think\Controller;
class CommentController extends Controller {
    public function showlist(){
        $user=D('comment');
        $res=$user->select();

        //

        $count=$user->count();//
        $page=new \Think\Page($count,5);//
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
        $user=D('comment');
        if($user->delete($id)){
            $this->success('delete success!',U('showlist'),0);
        }else{
            $this->error('delete false!');
        }
    }
}