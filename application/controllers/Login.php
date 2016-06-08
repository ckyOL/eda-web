<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-01
 * Time: 16:48
 * 登陆
 */
class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->database();
    }

    public function index()
    {

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $data['systemerror']='';
            $this->load->view('login',$data);
        }
        else
        {
            $userid=$this->UserModel->login($this->input->post('username'),$this->input->post('password'));
            if($userid!=-1)
            {
                $this->session->set_userdata('userid', $userid);
                header('location:/');
            }
            else
            {
                $data['systemerror']='your name or password is false!';
                $this->load->view('login',$data);
            }
        }
    }

}