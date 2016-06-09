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
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->database();
    }

    public function view($mid)
    {
        $user['id']=$this->session->userid;
        $user['name']=$this->UserModel->getName($user['id']);
        $user['picture']=$this->UserModel->getPicture($user['id']);
        $matching=$this->MatchingModel->getById($mid);
        if(!$matching) return;
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
}