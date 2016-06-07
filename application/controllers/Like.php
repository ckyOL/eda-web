<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-01
 * Time: 17:04
 * 点赞
 */
class Like extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Like');
    }

    public function index()
    {

        if(isset($this->session->userid))
        {
            $id=$this->session->userid;
            $mid=$this->input->get('mid');
            if(!$mid) echo 'Who is your daddy!';
            else if($this->Like->like($id,$mid))
            {
                echo 'like Success!';
            }
            else
            {
                if($this->Like->unlike($id,$mid))
                {
                    echo 'unlike Success!';
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