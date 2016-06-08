<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-01
 * Time: 17:04
 * 收藏
 */
class Favorite extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('FavoriteModel');
    }

    public function index()
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
            if($this->FavoriteModel->cancleFavorite($id,$mid))
            {
                echo 'cancle favorite Success!';
            }
            else
            {
                echo 'error';
            }
        }
    }
}