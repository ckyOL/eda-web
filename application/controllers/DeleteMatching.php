<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-01
 * Time: 16:53
 * 删除文章
 */

class DeleteMatching extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Matching');
    }

    public function index()
    {

        if(isset($this->session->userid))
        {
            $id=$this->session->userid;
            $mid=$this->input->get('mid');
            if(!$mid) echo 'Who is your daddy!';
            else if($this->Matching->deleteMatching($id,$mid))
            {
                echo 'delete Friend Success!';
            }
            else
            {
                echo 'permission denied!';
            }
        }
        else
        {
            $this->load->view('/quit');
        }
    }
}