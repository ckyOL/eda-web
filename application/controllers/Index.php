<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-05-29
 * Time: 14:57
 * 显示主页面
 */
class Index extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('UserModel');
        $this->load->model('MatchingModel');
    }

    public function index()
    {
        $cards=$this->MatchingModel->getHotMatching();

        if(isset($this->session->userid))
        {
            $id=$this->session->userid;
            $date=array(
                'userName' => $this->UserModel->getName($id),
                'pictureUrl' => $this->UserModel->getPicture($id),
                'cards' => $cards
            );
            $this->load->view('/hot',$date);
        }
        else
        {
            $date['cards']=$cards;
            $this->load->view('/index',$date);
        }
    }
}
?>