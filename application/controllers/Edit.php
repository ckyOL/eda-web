<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-02
 * Time: 16:38
 */
class Edit extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->library('session');
    }

    public function matching()
    {
        $id=$this->session->userid;

    }
    public function parts()
    {

    }
}