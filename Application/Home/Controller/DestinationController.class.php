<?php
/**
 * Created by PhpStorm.
 * User: 友杰
 * Date: 2016/6/13
 * Time: 13:36
 */
namespace Home\Controller;
use Think\Controller;
class DestinationController extends Controller {
    public function index()
    {
        //print_r(get_defined_constants()); //获取系统变量信息
        $this->display();
    }
    public function desinterest()
    {
        $a=D('scenery');
        $r=$a->select();
        $this->assign('rst',$r);
        
        $this->display();
    }
    public function desmap()
    {

        $this->display();
    }
    public function despark()
    {
        $model=D('garden');
        $rst=$model->select();
        $this->assign('rst',$rst);
        $this->display();
    }
}