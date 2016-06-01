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
    }

    public function index()
    {
        if(isset($this->session->user))
        {
            $this->load->view('/hot');
        }
        else
        {
            $this->load->view('/index');
        }
    }
}
?>