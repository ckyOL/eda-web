<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-01
 * Time: 17:16
 * 评论
 */
class Comment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('CommentModel');
    }

    public function index()
    {

        $id=$this->session->userid;
        $mid=$this->input->post('mid');
        $content=$this->input->post('content');
        if(!$mid or !$content) echo 'Who is your daddy!';
        else if($this->CommentModel->comment($id,$mid,$content))
        {
            echo 'comment success';
        }
        else
        {
            echo 'comment error';
        }
    }
    public function delete()
    {

        $id=$this->session->userid;
        $cid=$this->input->post('cid');
        if(!$cid) ;
        else if($this->CommentModel->deleteComment($id,$cid))
        {
            echo 'delete comment success';
        }
        else
        {
            echo 'permission denied!';
        }
    }
}