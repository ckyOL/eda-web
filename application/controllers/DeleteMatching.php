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
        $this->load->model('MatchingModel');
    }

    public function index()
    {

        $id=$this->session->userid;
        $mid=$this->input->get('mid');
        if(!$mid) ;
        else if($this->MatchingModel->deleteMatching($id,$mid))
        {
            echo 'delete Friend Success!';
        }
        else
        {
            echo 'permission denied!';
        }
    }
}