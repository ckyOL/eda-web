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
        $this->load->model('MatchingModel');
        $this->load->model('PartsModel');
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function matching($mid)
    {
        $id=$this->session->userid;
        $this->session->set_userdata('mid', $mid);
        $author=$this->MatchingModel->getUserid($mid);
        $mlevel=$this->UserModel->getLevel($author);
        $ulevel=$this->UserModel->getLevel($id);
        $matching=$this->MatchingModel->getById($mid);
        $data=array(
            'matching' => $matching,
            'systemerror' => '',
            'mid' => $mid,
        );
        if($mlevel>$ulevel)
        {
            header('location:/sendmessage?level=low');
        }
        else
        {
            $this->form_validation->set_rules('style', 'Style', 'required|max_length[50]');
            $this->form_validation->set_rules('scenario', 'Scenario', 'required|max_length[50]');
            $this->form_validation->set_rules('season', 'Season', 'required|max_length[30]');
            $this->form_validation->set_rules('sex', 'Sex', 'required|integer');
            $this->form_validation->set_rules('reviews', 'Reviews', 'required');
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('editMatching',$data);
            }
            else
            {
                $result=$this->MatchingModel->update(
                    $mid,
                    $this->input->post('style'),
                    $this->input->post('scenario'),
                    $this->input->post('season'),
                    (int)($this->input->post('sex')),
                    $this->input->post('reviews')
                );
                if($result===true)
                {
                    if($author==$id)
                    {
                        $this->session->unset_userdata('mid');
                        header('location:/matching/view/'.$mid);
                    }
                    else
                    {
                        header('location:/sendmessage?level=high');
                    }
                }
                else
                {
                    $data['systemerror']='system error!';
                    $this->load->view('editMatching',$data);
                }
            }
        }
    }
    public function parts($pid)
    {
        $id=$this->session->userid;
        $mid=$this->PartsModel->getMid($pid);
        $this->session->set_userdata('mid', $mid);
        $author=$this->MatchingModel->getUserid($mid);
        $mlevel=$this->UserModel->getLevel($author);
        $ulevel=$this->UserModel->getLevel($id);
        $part=$this->PartsModel->getById($pid);
        $data=array(
            'mid' => $mid,
            'part' => $part,
            'systemerror' => ''
        );

        if($mlevel>$ulevel)
        {
            header('location:/sendmessage?level=low');
        }
        else
        {
            $this->form_validation->set_rules('type', 'Type', 'required|max_length[30]');
            $this->form_validation->set_rules('content', 'Content', 'required');
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('editParts',$data);
            }
            else
            {
                $result=$this->PartsModel->update(
                    $pid,
                    $this->input->post('type'),
                    $this->input->post('content')
                );
                if($result)
                {
                    if($author==$id)
                    {
                        $this->session->unset_userdata('mid');
                        header('location:/matching/view/'.$mid);
                    }
                    else
                    {
                        header('location:/sendmessage?level=high');
                    }
                }
                else
                {
                    $data['systemerror']='system error!';
                    $this->load->view('editParts',$data);
                }
            }
        }
    }
}