<?php
/**
 * Created by PhpStorm.
 * User: 友杰
 * Date: 2016/6/2
 * Time: 13:12
 */
namespace Home\Controller;
use Think\Controller;

class RouteController extends Controller{
    public function recommendthai(){
        $route=D('route');
        $rst=$route->select();
        $this->assign('rst',$rst);
        $this->display();
    }
    public function recommendhotel(){
        $this->display();
    }
}