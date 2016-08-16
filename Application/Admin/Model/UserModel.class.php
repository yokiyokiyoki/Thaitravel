<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model{

    public function checklogin($user,$password){

        $condition['user']=$user;
        $condition['password']=md5($password);
        $condition['mark']=1;
        if($admin=$this->where($condition)->find()){
            session('admin',$admin);
            return true;
        }else{
            return false;
        }
    }

}