<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-01
 * Time: 16:39
 * 显示收藏的文章
 */
class Collect extends CI_Controller
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

        $id=$this->session->userid;
        $cards=$this->MatchingModel->getCollectMatching($id);
        $date=array(
            'userName' => $this->UserModel->getName($id),
            'pictureUrl' => $this->UserModel->getPicture($id),
            'cards' => $cards
        );
        $this->load->view('/collect',$date);
    }
}