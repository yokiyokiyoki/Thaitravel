<?php
namespace Admin\Controller;
use Think\Controller;
class Type2Controller extends Controller {

	
	public function showlist2(){
		$scenery=D('scenery');
		$res=$scenery->select();
		
		//
		
		$count=$scenery->count();//
		$page=new \Think\Page($count,3);//
		$page->setConfig('first','首页');
        $page->setConfig('last','最后一页');
        $page->setConfig('prev','上页');
        $page->setConfig('next','下页');
		$show=$page->show();//
		//
		$res=$scenery->limit($page->firstRow.','.$page->listRows)->select();
		
		
		$this->assign('res',$res);
		$this->assign('page',$show);
		$this->display();
	}
    
	public function tianjia2(){
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
					$data['place']=I('place');


					//$data['title']=I('title');
					$data['content']=I('content','',false);
					$type=D('scenery');
					if($type->create($data)){
						if($type->add($data)){
							$this->success('success',U('showlist2'),0);
						}else{
							$this->error('false!');
						}
					}else{
						$this->error($type->getError());
					}
					return;

				}
				}
			}
			

		$this->display();
	}

	public function xiugai2(){
		
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
					$data['place']=I('place');
					$data['id']=I('id');


					//$data['title']=I('title');
					$data['content']=I('content','',false);
					$scenery=D('scenery');

					if($scenery->create($data)){
						if($scenery->save()){
							$this->success('update success!',U('showlist2'),0);
						}else{
							$this->error('update false!');
						}
					}else{
						$this->error($scenery->getError());
					}
					return;
				}
				}
			}
			


		$id=I('id');


		$model=D('scenery');

		$map['id']=$id;
		$rst=$model->where($map)->find();
		$content=$rst['content'];
		$date=$rst['date'];
		$place=$rst['place'];
		$title=$rst['title'];

		$img=$rst['image'];




		$this->assign('img',$img);
        $this->assign('id',$id);
        $this->assign('place',$place);
        $this->assign('date',$date);

        $this->assign('title',$title);
        $this->assign('content',$content);
		$this->display();
	}

	public function shanchu2(){

     $id=I('id');
     $scenery=D('scenery');
     if($scenery->delete($id)){
     	$this->success('delete success!',U('showlist2'),0);
     }else{
				$this->error('delete false!');
			}
	}
	
	
}