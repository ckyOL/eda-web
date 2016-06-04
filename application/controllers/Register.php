<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-01
 * Time: 16:48
 * 注册
 */
class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->database();
    }

    public function index()
    {

        $data=array(
            'successInfo' => "",
            'systemerror' => "",
        );

        $this->form_validation->set_rules('username', 'Username', 'required|min_length[1]|max_length[20]|callback_spcharCheck|is_unique[user.name]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]|max_length[20]');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('register',$data);
        }
        else
        {
            if($this->User->registerUser($this->input->post('username'),$this->input->post('password')))
                $data['successInfo']='sign up success!';
            else
                $data['systemerror']='sql error!Maybe your name was used!';
            $this->load->view('register',$data);
        }
    }

    public function spcharCheck($str)
    {
        if (preg_match("/[\'.,:;*?~`!@#$%^&+=)(<>{}]|\]|\[|\/|\\\|\"|\|/",$str))
        {
            $this->form_validation->set_message('spcharCheck', 'You can not use special character to be your name!');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

}