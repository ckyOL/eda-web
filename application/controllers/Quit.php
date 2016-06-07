<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-01
 * Time: 16:48
 * 退出登录
 */

class Quit extends CI_Controller
{
    public function index()
    {
        $this->load->library('session');
        $this->session->unset_userdata('userid');
        $this->load->view('/quit');
    }
}