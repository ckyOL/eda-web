<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-01
 * Time: 16:52
 * 查看文章详情页并加载评论
 */
class Matching extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->model('MatchingModel');
        $this->load->model('PartsModel');
        $this->load->model('CommentModel');
        $this->load->model('LikeModel');
        $this->load->model('FavoriteModel');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->database();
    }

    public function view($mid)
    {
        $uid=$this->MatchingModel->getUserId($mid);
        $user=$this->UserModel->getById($uid);
        $matching=$this->MatchingModel->getById($mid);
        if(!$matching)
        {
            echo 'The matching is not exist!';
            return;
        }
        $matching['likenum']=$this->LikeModel->getLikeNum($mid);
        $parts=$this->PartsModel->getByMid($mid);
        $comments=$this->CommentModel->getByMid($mid);

        $data=array(
            'user' => $user,
            'matching' => $matching,
            'parts' => $parts,
            'comments' => $comments
        );

        $this->form_validation->set_rules('comment', 'Comment', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $data['systemerror']='';
            $this->load->view('info',$data);
        }
        else
        {
            if($this->CommentModel->comment($user['id'],$mid,$this->input->post('comment')))
            {
                header('location:/matching/view/'.$mid);
            }
            else
            {
                $data['systemerror']='system error!';
                $this->load->view('info',$data);
            }
        }
    }
    
    public function like()
    {
        $id=$this->session->userid;
        $mid=$this->input->get('mid');
        if(!$mid) ;
        else if($this->LikeModel->like($id,$mid))
        {
            $likenum=$this->LikeModel->getLikeNum($mid);
            echo $likenum.':like Success!';
        }
        else
        {
            if($this->LikeModel->unlike($id,$mid))
            {
                $likenum=$this->LikeModel->getLikeNum($mid);
                echo $likenum.':unlike Success!';
            }
            else
            {
                $likenum=$this->LikeModel->getLikeNum($mid);
                echo $likenum.':error';
            }
        }
    }
    
    public function favorite()
    {
        $id=$this->session->userid;
        $mid=$this->input->get('mid');
        if(!$mid) ;
        else if($this->FavoriteModel->favorite($id,$mid))
        {
            echo 'favorite Success!';
        }
        else
        {
            if($this->FavoriteModel->cancelFavorite($id,$mid))
            {
                echo 'cancle favorite Success!';
            }
            else
            {
                echo 'error';
            }
        }
    }
    
    public function delete()
    {
        $id=$this->session->userid;
        $mid=$this->input->get('mid');
        if(!$mid) ;
        else if($this->MatchingModel->delete($id,$mid))
        {
            echo 'delete success';
        }
        else
        {
            echo 'system error!';
        }
    }
    
}