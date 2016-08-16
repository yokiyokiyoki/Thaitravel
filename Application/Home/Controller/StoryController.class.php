<?php
/**
 * Created by PhpStorm.
 * User: 友杰
 * Date: 2016/6/13
 * Time: 13:55
 */
namespace Home\Controller;
use Think\Controller;
class StoryController extends Controller {
    public function index()
    {
        //print_r(get_defined_constants()); //获取系统变量信息
        $this->display();
    }
    public function storyours()
    {
        $id=I('id');
        $a=D('youji');
        $map['id']=$id;
        $r=$a->where($map)->find();


        //comment
        $comment=D('comment');
        $map1['youji_id']=$id;
        $com=$comment->where($map1)->select();
        $count=$comment->where($map1)->count();

        $com1=$comment->where($map1)->find();

        $this->assign('comment1',$com1);
        $this->assign('comment',$com);
        $this->assign('count',$count);

        $this->assign('rst',$r);
        $this->assign('youjiid',$id);

        $this->display();
    }
    public function storythai()
    {



        $this->display();
    }
    public function article(){
        if(!empty($_POST)){
            $rst=I('myVent','',false);
            $title=I('title');
            $model=D('youji');
            $user_id=session('user_id');
            //author
            $umodel=D('user');
            $map['user_id']=$user_id;
            $umm=$umodel->where($map)->find();
            $username=$umm['user_name'];

            $data['author']=$username;
            $data['user_id']=$user_id;
            $data['title']=$title;
            $data['content']=$rst;
            $data['date']=date('Y-m-d');
            $z=$model->add($data);
            if ($z){
                $this->success('success',U('Index/index'));
            }
            else{
                $this->error('error',U('Story/storythai'));
            }
        }
    }
    public function storylist()
    {
        $story=D('youji');
        $r=$story->select();
        $this->assign('rst',$r);
        $this->display();
    }
    public function commentadd(){
        $youjiid=$_GET['youjiid'];
        print_r($youjiid);
        $userid=session('user_id');
        $comment=I('comment');

        $art=D('Youji');
        $map1=$youjiid;
        $art1=$art->where($map1)->find();

        $user=D('user');
        $map['user_id']=$userid;
        $rst=$user->where($map)->find();
        $user_name=$rst['user_name'];


        $data['user_name']=$user_name;
        $data['youji_id']=$youjiid;
        $data['user_id']=$userid;
        $data['comment']=$comment;
        $data['youji_name']=$art1['title'];
        $data['date']=date('Y-m-d');

        $model=D('Comment');
        $z=$model->add($data);
        if ($z){
            $this->redirect('Story/storyours',array('id'=>$youjiid),1,'comment success');
        }
        else{
            $this->redirect('Story/storyours',array('id'=>$youjiid),1,'comment success');
        }




    }
    public function commentdelete(){
        $userid=$_GET['userid'];
        $commentid=$_GET['commentid'];
        $comment=D('comment');
        $s_userid=session('user_id');
        if ($s_userid===$userid){
            $comment->delete($commentid);
            $this->success('删除成功');
        }else{
            $this->error('这不是你的评论');
        }
    }
    public function ueditor(){
        $data = new \Org\Util\Ueditor();
        echo $data->output();
    }
}