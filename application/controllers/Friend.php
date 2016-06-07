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
        $this->load->model('User');
        $this->load->model('Matching');
        $this->load->model('Friend');
    }

    public function index()
    {

        if(isset($this->session->userid))
        {
            $id=$this->session->userid;
            $cards=$this->Matching->getFriendMatching($id);
            $date=array(
                'userName' => $this->User->getName($id),
                'pictureUrl' => $this->User->getPicture($id),
                'cards' => $cards
            );
            $this->load->view('/friend',$date);
        }
        else
        {
            $this->load->view('/quit');
        }
    }

    public function add()
    {

        if(isset($this->session->userid))
        {
            $id=$this->session->userid;
            $friendid=$this->input->get('friendid');
            if(!$friendid) echo 'Who is your daddy!';
            else if($this->Friend->addFriend($id,$friendid))
            {
                echo 'AddFriend Success!';
            }
            else
            {
                echo 'You are friends already!';
            }
        }
        else
        {
            $this->load->view('/quit');
        }
    }

    public function delete()
    {

        if(isset($this->session->userid))
        {
            $id=$this->session->userid;
            $friendid=$this->input->get('friendid');
            if(!$friendid) echo 'Who is your daddy!';
            else if($this->Friend->deleteFriend($id,$friendid))
            {
                echo 'delete Friend Success!';
            }
            else
            {
                echo 'This id is not exist!';
            }
        }
        else
        {
            $this->load->view('/quit');
        }
    }
}