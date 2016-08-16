<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller
{
    public function login()
    {
        if (!empty($_POST)){
            $info=new \Home\Model\UserModel();
            $pwd=$_POST['user_pwd'];
            $name=$_POST['user_name'];
            $rst= $info->checknamepwd($name,$pwd);
            $map['user_pwd']=$pwd;
            $map['user_name']=$name;
            $rs=$info->where($map)->find();
            if ($rst!=true){
                $this->error('error',U('User/login'));

            }
            else{
                $this->success('success',U('Index/index'));
                session('user_id',$rs['user_id']);
                session('user_name',$rs['user_name']);
            }
        }

        $this->display();
    }
    public function register(){

        if (!empty($_POST)){
            $info=D('User');
            $data['user_pwd']=$_POST['user_pwd'];
            $data['user_name']=I('user_name');
            $data['phone_email']=I('phone_email');
            $z=$info->create($data);
            if (!$z){
                echo '请重新填写';
            }else{
                $info->add();
                $this->redirect('Index/index');
            }

        }

        $this->display();
    }

    public function logout(){
        session('user_id',null);
        session('user_name',null);
        $this->redirect('Index/index');
    }

    public function changepwd(){
        if (!empty($_POST)){
            $info=D('User');
            $userid=session('user_id');
            $map['user_id']=$userid;
            $rst=$info->where($map)->find();
            $data['user_pwd']=$_POST['user_pwd'];
            $data['user_name']=$rst['user_name'];
            $data['user_mark']=$rst['user_mark'];
            $data['phone_email']=$rst['phone_email'];
            $data['user_id']=$userid;

            $a=$info->save($data);
            if ($a){
                $this->success('密码更改成功',U('Index/edit'));
            }
            else{
                $this->error('密码修改失败',U('Index/edit'));
            }
        }
    }
}