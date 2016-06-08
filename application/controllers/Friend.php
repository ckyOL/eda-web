<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-01
 * Time: 16:39
 * 显示好友文章
 */
class Friend extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('UserModel');
        $this->load->model('MatchingModel');
        $this->load->model('FriendModel');
    }

    public function index()
    {

        $id=$this->session->userid;
        $cards=$this->MatchingModel->getFriendMatching($id);
        $date=array(
            'userName' => $this->UserModel->getName($id),
            'pictureUrl' => $this->UserModel->getPicture($id),
            'cards' => $cards
        );
        $this->load->view('/friend',$date);
    }

    public function add()
    {
        $id=$this->session->userid;
        $friendid=$this->input->get('friendid');
        if(!$friendid) ;
        else if($this->FriendModel->addFriend($id,$friendid))
        {
            echo 'AddFriend Success!';
        }
        else
        {
            echo 'You are friends already!';
        }
    }

    public function delete()
    {
        $id=$this->session->userid;
        $friendid=$this->input->get('friendid');
        if(!$friendid) ;
        else if($this->FriendModel->deleteFriend($id,$friendid))
        {
            echo 'delete Friend Success!';
        }
        else
        {
            echo 'This id is not exist!';
        }
    }
}