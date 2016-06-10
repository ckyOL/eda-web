<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-01
 * Time: 16:40
 * 用户设置页面
 */
class Setting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $id=$this->session->userid;
        $user=$this->UserModel->getById($id);
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[1]|max_length[20]|callback_spcharCheck');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]|max_length[20]');
        $this->form_validation->set_rules('signature', 'Signature', 'required|max_length[200]');
        $this->form_validation->set_rules('sex', 'Sex', 'required|integer');
        $data=array(
            'userName' => $this->UserModel->getName($id),
            'pictureUrl' => $this->UserModel->getPicture($id),
            'user' => $user,
            'systemerror' => '',
        );
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('setting',$data);
        }
        else
        {
            if($this->UserModel->updateUser($id,$this->input->post('username'),$this->input->post('password'),(int)($this->input->post('sex')),$this->input->post('signature')))
                header('location:/setting');
            else
            {
                $data['systemerror']='sql error!';
                $this->load->view('setting',$data);
            }
        }
    }
    
    public function pic()
    {
        $config['upload_path']      = 'public/img/';
        $config['allowed_types']    = 'gif|jpg|png|jpeg';
        $config['max_size']     = 1024;
        $config['min_width']        = 50;
        $config['min_height']       = 50;
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('picfile'))
        {
            echo '0:'.$this->upload->display_errors();
        }
        else
        {
            $id=$this->session->userid;
            $upload_data=$this->upload->data();
            $picUrl='/public/img/'.$upload_data['file_name'];
            if($this->UserModel->updatePic($id,$picUrl))
            {
                echo '1:'.$picUrl;
            }
            else
            {
                echo '0:'.'system error';
            }
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