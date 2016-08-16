<?php
/**
 * Created by PhpStorm.
 * User: 友杰
 * Date: 2016/5/17
 * Time: 11:58
 */
namespace Home\Model;

use Think\Model;

class UserModel extends Model{
    function checknamepwd($name,$pwd){
        $info=$this->getByuser_name($name);
        if ($info!=null){
            if ($info['user_pwd']===$pwd){
                return $info;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
}