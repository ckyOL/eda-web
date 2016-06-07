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
        $this->load->model('Favorite');
    }

    public function index()
    {

        if(isset($this->session->userid))
        {
            $id=$this->session->userid;
            $mid=$this->input->get('mid');
            if(!$mid) echo 'Who is your daddy!';
            else if($this->Favorite->favorite($id,$mid))
            {
                echo 'favorite Success!';
            }
            else
            {
                if($this->Favorite->cancleFavorite($id,$mid))
                {
                    echo 'cancle favorite Success!';
                }
                else
                {
                    echo 'error';
                }
            }
        }
        else
        {
            $this->load->view('/quit');
        }
    }
}