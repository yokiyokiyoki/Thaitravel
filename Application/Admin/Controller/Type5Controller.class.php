<?php
/**
 * Created by PhpStorm.
 * User: 友杰
 * Date: 2016/6/15
 * Time: 19:50
 */
namespace Admin\Controller;
use Think\Controller;
class Type5Controller extends Controller {


    public function showlist(){
        $route=D('route');
        $res=$route->select();

        //

        $count=$route->count();//
        $page=new \Think\Page($count,3);//
        $page->setConfig('first','首页');
        $page->setConfig('last','最后一页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $show=$page->show();//
        //
        $res=$route->limit($page->firstRow.','.$page->listRows)->select();


        $this->assign('res',$res);
        $this->assign('page',$show);
        $this->display();
    }

    public function tianjia(){
        if(IS_POST){


                    $data['route_name']=I('route_name');
                    $data['route_price']=I('route_price');

                    //$data['title']=I('title');
                    $data['route_content']=I('route_content','',false);
                    $type=D('route');
                    if($type->create($data)){
                        if($type->add($data)){
                            $this->success('success',U('showlist'),0);
                        }else{
                            $this->error('false!');
                        }
                    }else{
                        $this->error($type->getError());
                    }


                }




        $this->display();
    }

    public function xiugai(){

        if(!empty($_POST)){


            $data['route_price']=I('route_price');
            $data['route_name']=I('route_name');
            $data['route_content']=I('route_content','',false);

            $data['id']=I('id');

            $route=D('Route');
            //执行原生语句
           $a=$route->save($data);
            if ($a!==false){
                $this->success('update success!',U('showlist'),0);

            }
            else{
                $this->error('update false!');


            }

        }






        $id=I('id');

        $model=D('route');

        $map['id']=$id;
        $rst=$model->where($map)->find();
        $content=$rst['route_content'];
        $price=$rst['route_price'];
        $name=$rst['route_name'];


        $this->assign('id',$id);
        $this->assign('name',$name);
        $this->assign('price',$price);

        //$this->assign('title',$title);
        $this->assign('content',$content);
        $this->display();
    }

    public function shanchu(){

        $id=I('id');
        $route=D('route');
        if($route->delete($id)){
            $this->success('delete success!',U('showlist'),0);
        }else{
            $this->error('delete false!');
        }
    }


}