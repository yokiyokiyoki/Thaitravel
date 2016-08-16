<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index()
    {
        //print_r(get_defined_constants()); //获取系统变量信息

        $this->display();
    }
    public function activity()
    {

        $a=D('huodong');
        $r=$a->select();
        $this->assign('rst',$r);
        $this->display();
    }
    public function FAQ()
    {
        //print_r(get_defined_constants()); //获取系统变量信息
        $this->display();
    }
    public function gotothai()
    {
        //print_r(get_defined_constants()); //获取系统变量信息
        $this->display();
    }
    public function edit()
    {
        //print_r(get_defined_constants()); //获取系统变量信息
        $user=D('User');

        $userid=session('user_id');
        $map['user_id']=$userid;
        $rst=$user->where($map)->find();
        //comment
        $model=D('comment');
        $rst1=$model->select();
        $comsum=$model->where($map)->count();

        //youji
        $model1=D('youji');
        $youjisum=$model1->where($map)->count();


        $youji=$model1->where($map)->select();

        $this->assign('youji',$youji);
        $this->assign('youjisum',$youjisum);
        $this->assign('rst',$rst);
        $this->assign('comsum',$comsum);
        $this->assign('rst1',$rst1);
        $this->assign('user_id',$userid);
        $this->display();
    }
    public function userchange()
    {
        //print_r(get_defined_constants()); //获取系统变量信息
        $abc=D('User');

        $userid=session('user_id');
        $map['user_id']=$userid;
        $rst=$abc->where($map)->find();
        

        $data['user_id']=$userid;
        $data['user_name']=I('user_name');
        $data['phone_email']=I('phone_email');
        $data['user_pwd']=$rst['user_pwd'];
        $data['user_mark']=$rst['user_mark'];
        $map['user_id']=$userid;

        $z=$abc->where($map)->save($data);
        if ($z!==false){
            $this->success('保存成功',U('Index/edit'));
        }
        else{
            $this->error('保存失败',U('Index/edit'));
        }
    }
    
}