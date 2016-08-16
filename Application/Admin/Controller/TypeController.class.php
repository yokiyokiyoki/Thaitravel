<?php
namespace Admin\Controller;
use Think\Controller;
class TypeController extends Controller {


	public function showlist(){
		$youji=D('youji');
		$res=$youji->select();
		
		//
		
		$count=$youji->count();//
		$page=new \Think\Page($count,3);//
		$page->setConfig('first','首页');
        $page->setConfig('last','最后一页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
		$show=$page->show();//
		//
		$res=$youji->limit($page->firstRow.','.$page->listRows)->select();


		$this->assign('res',$res);
		$this->assign('page',$show);
		$this->display();
	}
    
	public function tianjia(){
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
					$data['author']=I('author');
					$data['date']=I('date');
					
					$data['title']=I('title');
					$data['content']=I('content','',false);
					$type=D('youji');
					if($type->create($data)){
						if($type->add($data)){
							$this->success('success',U('showlist'),0);
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

	public function xiugai(){
		
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
					$data['author']=I('author');
					$data['id']=I('id');
					$data['date']=I('date');

					$data['title']=I('title');
					$data['content']=I('content','',false);
					$youji=D('youji');

					if($youji->create($data)){
						if($youji->save()){
							$this->success('update success!',U('showlist'),0);
						}else{
							$this->error('update false!');
						}
					}else{
						$this->error($youji->getError());
					}
					return;
				}
				}
			}



		$id=I('id');




		$model=D('youji');
		$map['id']=$id;
		$rst=$model->where($map)->find();
		$content=$rst['content'];
		$date=$rst['date'];
		$author=$rst['author'];
		$title=$rst['title'];

        $this->assign('id',$id);
		$img=$rst['image'];




		$this->assign('img',$img);

        $this->assign('date',$date);
		$this->assign('author',$author);
        $this->assign('title',$title);
        $this->assign('content',$content);
		$this->display();
	}

	public function shanchu(){

     $id=I('id');
     $youjig=D('youji');
     if($youjig->delete($id)){
     	$this->success('delete success!',U('showlist'),0);
     }else{
				$this->error('delete false!');
			}
	}
	
	
}