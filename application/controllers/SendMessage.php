<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-01
 * Time: 16:52
 * 提交文章修改
 */
class SendMessage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->model('MatchingModel');
        $this->load->model('MessageModel');
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $id=$this->session->userid;
        $mid=$this->session->mid;
        $level=$this->input->get('level');
        if(!$mid or !$level) return;
        $detid=$this->MatchingModel->getUserid($mid);
        $name=$this->UserModel->getName($detid);
        $warnMessage='Your lever is lower than the author,Your can only send message to notify he to edit it!';
        if($level=='high') $warnMessage='You can send Message to notify he that you edit it!';

        $data=array(
            'mid' => $mid,
            'username' => $name,
            'systemerror' => '',
            'warnMessage' => $warnMessage
        );

        $this->form_validation->set_rules('title', 'Title', 'required|max_length[200]');
        $this->form_validation->set_rules('content', 'Message', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('sendMessage',$data);
        }
        else
        {
            $result=$this->MessageModel->send(
                $id,
                $detid,
                $mid,
                $this->input->post('title'),
                $this->input->post('content')
            );
            if($result)
            {
                $this->session->unset_userdata('mid');
                header('location:/matching/view/'.$mid);
            }
            else
            {
                $data['systemerror']='system error';
                $this->load->view('sendMessage',$data);
            }
        }

    }
}