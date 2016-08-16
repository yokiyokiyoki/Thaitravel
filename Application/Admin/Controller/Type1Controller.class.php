<?php
namespace Admin\Controller;
use Think\Controller;
class Type1Controller extends Controller {


	public function showlist1(){
		$huodon=D('huodong');
		$res=$huodon->select();
		
		//
		
		$count=$huodon->count();//
		$page=new \Think\Page($count,3);//
		$page->setConfig('first','首页');
        $page->setConfig('last','最后一页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
		$show=$page->show();//
		//
		$res=$huodon->limit($page->firstRow.','.$page->listRows)->select();

		
		$this->assign('res',$res);
		$this->assign('page',$show);
		$this->display();
	}
    
	public function tianjia1(){
		if(IS_POST){
			if (!empty($_FILES)){
				$config=array( 'rootPath'      =>  './Public/', //保存根路径
					'savePath'      =>  'upload/', );//保存路径
				$upload=new \Think\Upload($config);
				$z=$upload->uploadOne($_FILES['image']);
				if(!$z){
					print_r($upload->getError());
				}
				else{
					$imgpath=$z['savepath'].$z['savename'];
					$data['image']=$imgpath;

					$data['atname']=I('atname');
					$data['date']=I('date');

					//$data['title']=I('title');
					$data['content']=I('content','',false);
					$type=D('huodong');
					if($type->create($data)){
						if($type->add($data)){
							$this->success('success',U('showlist1'),0);
						}else{
							$this->error('false!');
						}
					}else{
						$this->error($type->getError());
					}


				}
				}
			}


		$this->display();
	}

	public function xiugai1(){
		
        if(IS_POST){

			if (!empty($_FILES)){
				$config=array( 'rootPath'      =>  './Public/', //保存根路径
					'savePath'      =>  'upload/', );//保存路径
				$upload=new \Think\Upload($config);
				$z=$upload->uploadOne($_FILES['image']);
				if(!$z){
					print_r($upload->getError());
				}
				else{
					$imgpath=$z['savepath'].$z['savename'];
					$data['image']=$imgpath;
					$data['atname']=I('atname');
					$data['id']=I('id');
					$data['date']=I('date');

					//$data['title']=I('title');
					$data['content']=I('content','',false);
					$huodon=D('huodong');

					if($huodon->create($data)){
						if($huodon->save()){
							$this->success('update success!',U('showlist1'),0);
						}else{
							$this->error('update false!');
						}
					}else{
						$this->error($huodon->getError());
					}
					return;
				}
				}
			}




		$id=I('id');

		$model=D('huodong');

		$map['id']=$id;
		$rst=$model->where($map)->find();
		$content=$rst['content'];
		$date=$rst['date'];
		$atname=$rst['atname'];
		$img=$rst['image'];




		$this->assign('img',$img);
        $this->assign('id',$id);
        $this->assign('atname',$atname);
        $this->assign('date',$date);

        //$this->assign('title',$title);
        $this->assign('content',$content);
		$this->display();
	}

	public function shanchu1(){

     $id=I('id');
     $huodon=D('huodong');
     if($huodon->delete($id)){
     	$this->success('delete success!',U('showlist1'),0);
     }else{
				$this->error('delete false!');
			}
	}
	
	
}