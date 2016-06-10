<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-01
 * Time: 16:40
 * 显示通知
 */
class Notification extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('FriendModel');
        $this->load->model('MessageModel');
        $this->load->model('CommentModel');
        $this->load->model('LikeModel');
        $this->load->model('UserModel');
    }

    public function index()
    {
        $id=$this->session->userid;
        $friends=$this->FriendModel->getByUid($id);
        $edits=$this->MessageModel->getByUid($id);
        $comments=$this->CommentModel->getByUid($id);
        $likes=$this->LikeModel->getByUid($id);
        $notifyNum=array(
            'friend' => count($friends)==0?'':count($friends),
            'edit' => count($edits)==0?'':count($edits),
            'comment' => count($comments)==0?'':count($comments),
            'like' => count($likes)==0?'':count($likes),
        );
        $data=array(
            'notifyNum' =>$notifyNum,
            'edits' => $edits,
            'comments' =>$comments,
            'friends' => $friends,
            'likes' => $likes,
            'userName' => $this->UserModel->getName($id),
            'pictureUrl' => $this->UserModel->getPicture($id),
        );
        $this->load->view('notification',$data);
    }
    
    public function readComment()
    {
        $id=$this->session->userid;
        $cid=$this->input->get('cid');
        if(!$cid) return;
        if($this->CommentModel->read($cid))
        {
            $comments=$this->CommentModel->getByUid($id);
            $num=count($comments)==0?'':count($comments);
            echo $num.':read it!';
        }
        else
        {
            echo '-1:system error!';
        }
    }

    public function readMessage()
    {
        $id=$this->session->userid;
        $mid=$this->input->get('mid');
        if(!$mid) return;
        if($this->MessageModel->read($mid))
        {
            $edits=$this->MessageModel->getByUid($id);
            $num=count($edits)==0?'':count($edits);
            echo $num.':read it!';
        }
        else
        {
            echo '-1:system error!';
        }
    }
    public function readFriend()
    {
        $id=$this->session->userid;
        $uid=$this->input->get('uid');
        if(!$uid) return;
        if($this->FriendModel->read($uid,$id))
        {
            $friends=$this->FriendModel->getByUid($id);
            $num=count($friends)==0?'':count($friends);
            echo $num.':read it!';
        }
        else
        {
            echo '-1:system error!';
        }
    }
    public function readLike()
    {
        $id=$this->session->userid;
        $uid=$this->input->get('uid');
        $mid=$this->input->get('mid');
        if(!$uid or !$mid) return;
        if($this->LikeModel->read($uid,$mid))
        {
            $likes=$this->LikeModel->getByUid($id);
            $num=count($likes)==0?'':count($likes);
            echo $num.':read it!';
        }
        else
        {
            echo '-1:system error!';
        }
    }
}