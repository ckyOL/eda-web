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
}