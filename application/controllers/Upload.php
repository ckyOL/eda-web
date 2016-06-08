<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-01
 * Time: 17:13
 * 发布文章的页面
 */
class Upload extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->model('MatchingModel');
        $this->load->library('form_validation');
    }

    public function pic()
    {
        $config['upload_path']      = 'public/img/';
        $config['allowed_types']    = 'gif|jpg|png|jpeg';
        $config['max_size']     = 3072;
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('picfile'))
        {
            $data = array(
                'error' => $this->upload->display_errors(),
                'full_path' => '/public/img/white.jpg',
                'next' => 'disabled'
            );

            $this->load->view('uploadPic', $data);
        }
        else
        {
            $upload_data=$this->upload->data();
            $picUrl='/public/img/'.$upload_data['file_name'];
            $this->session->set_userdata('picUrl', $picUrl);
            $data = array(
                'error' => '',
                'full_path' => $picUrl,
                'next' => ''
            );
            $this->load->view('uploadPic', $data);
        }

    }

    public function matching()
    {
        $picUrl=$this->session->picUrl;
        if(!$picUrl) return;
        $id=$this->session->userid;
        $this->form_validation->set_rules('style', 'Style', 'required');
        $this->form_validation->set_rules('scenario', 'Scenario', 'required');
        $this->form_validation->set_rules('season', 'Season', 'required');
        $this->form_validation->set_rules('sex', 'Sex', 'required|integer');
        $this->form_validation->set_rules('reviews', 'Reviews', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $data['systemerror']='';
            $this->load->view('uploadMatching',$data);
        }
        else
        {
            $mid=$this->MatchingModel->push(
                $id,
                $picUrl,
                $this->input->post('style'),
                $this->input->post('scenario'),
                $this->input->post('season'),
                $this->input->post('sex'),
                $this->input->post('reviews')
            );
            if($mid!=-1)
            {
                $this->session->set_userdata('mid', $mid);
                header('location:/upload/parts');
            }
            else
            {
                $data['systemerror']='system error!';
                $this->load->view('uploadMatching',$data);
            }
        }
    }

    public function parts()
    {
        $id=$this->session->userid;
    }
}