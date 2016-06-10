<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-01
 * Time: 16:46
 * 其他用户的个人页面
 */
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MatchingModel');
        $this->load->model('UserModel');
        $this->load->library('session');

    }

    public function page($id)
    {
        $myid=$this->session->userid;
        $user=$this->UserModel->getById($id);
        $cards=$this->MatchingModel->getByUid($id);
        $data=array(
            'user'=>$user,
            'cards'=>$cards,
            'userName' => $this->UserModel->getName($myid),
            'pictureUrl' => $this->UserModel->getPicture($myid),
        );
        $this->load->view('user',$data);
    }
}