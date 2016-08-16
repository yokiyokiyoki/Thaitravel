<?php
namespace Admin\Controller;
use Think\Controller;
class Type3Controller extends Controller {

	//����·���б�
	public function showlist3(){
		$garden=D('garden');
		$res=$garden->select();
		
		//
		
		$count=$garden->count();//
		$page=new \Think\Page($count,3);//
		$page->setConfig('first','首页');
        $page->setConfig('last','最后一页');
        $page->setConfig('prev','上页');
        $page->setConfig('next','下页');
		$show=$page->show();//
		//
		$res=$garden->limit($page->firstRow.','.$page->listRows)->select();
		
		
		$this->assign('res',$res);
		$this->assign('page',$show);
		$this->display();
	}
    
	public function tianjia3(){
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
					$data['gdname']=I('gdname');
					$data['en_name']=I('en_name');


					$data['content']=I('content','',false);
					$type=D('garden');
					if($type->create($data)){
						if($type->add($data)){
							$this->success('success',U('showlist3'),0);
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

	public function xiugai3(){
		
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
					$data['gdname']=I('gdname');
					$data['id']=I('id');
					$data['en_name']=I('en_name');
					

					$data['content']=I('content','',false);
					$garden=D('garden');

					if($garden->create($data)){
						if($garden->save()){
							$this->success('update success!',U('showlist3'),0);
						}else{
							$this->error('update false!');
						}
					}else{
						$this->error($garden->getError());
					}
					return;
				}
				}
			}
			


		$id=I('id');



		$model=D('garden');

		$map['id']=$id;
		$rst=$model->where($map)->find();
		$content=$rst['content'];
		$en_name=$rst['en_name'];
		$gdname=$rst['gdname'];

		$img=$rst['image'];




		$this->assign('img',$img);

        $this->assign('id',$id);
        $this->assign('gdname',$gdname);
        $this->assign('en_name',$en_name);

        
        $this->assign('content',$content);

		$this->display();
	}

	public function shanchu3(){

     $id=I('id');
     $garden=D('garden');
     if($garden->delete($id)){
     	$this->success('delete success!',U('showlist3'),0);
     }else{
				$this->error('delete false!');
			}
	}
	
	
}