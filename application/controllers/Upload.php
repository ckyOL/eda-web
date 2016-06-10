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
        $this->load->model('PartsModel');
        $this->load->model('UserModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = array(
                'full_path' => '/public/img/white.jpg',
                'next' => 'disabled',
                'nextUrl' => 'javascript:void(0);',
            );
        if(isset($this->session->picUrl))
        {
            $data = array(
                'full_path' => $this->session->picUrl,
                'next' => '',
                'nextUrl' => '/upload/matching',
            );
        }
        $this->load->view('uploadPic', $data);
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
            echo '0:'.$this->upload->display_errors();
        }
        else
        {
            $upload_data=$this->upload->data();
            $picUrl='/public/img/'.$upload_data['file_name'];
            $this->session->set_userdata('picUrl', $picUrl);
            echo '1:'.$picUrl;
        }

    }

    public function matching()
    {
        $picUrl=$this->session->picUrl;
        if(!$picUrl) return;
        $id=$this->session->userid;
        $this->form_validation->set_rules('style', 'Style', 'required|max_length[50]');
        $this->form_validation->set_rules('scenario', 'Scenario', 'required|max_length[50]');
        $this->form_validation->set_rules('season', 'Season', 'required|max_length[30]');
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
                (int)($this->input->post('sex')),
                $this->input->post('reviews')
            );
            if($mid!=-1)
            {
                $this->session->unset_userdata('picUrl');
                $this->session->set_userdata('mid', $mid);
                $this->UserModel->levelUp($id);
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
        $mid=$this->session->mid;
        if(!$mid) return;
        $picUrl=$this->session->picUrl;
        $partNum=$this->session->partNum;
        if(!$partNum)
        {
            $this->session->set_userdata('partNum', '1');
            $partNum=1;
        }
        if(!$picUrl)
        {
            $data = array(
                'partnum' => $partNum,
                'full_path' => '/public/img/white.jpg',
                'systemerror' => '',
            );
            $this->load->view('uploadParts',$data);
        }
        else
        {
            $this->form_validation->set_rules('type', 'Type', 'required|max_length[30]');
            $this->form_validation->set_rules('brand', 'Brand', 'required|max_length[30]');
            $this->form_validation->set_rules('buy', 'Buy Link', 'required');
            $this->form_validation->set_rules('content', 'Content', 'required');
            if ($this->form_validation->run() == FALSE)
            {
                $data = array(
                    'partnum' => $partNum,
                    'full_path' => $picUrl,
                    'systemerror' => '',
                );
                $this->load->view('uploadParts',$data);
            }
            else
            {
                $result=$this->PartsModel->push(
                    $mid,
                    $picUrl,
                    $this->input->post('type'),
                    $this->input->post('brand'),
                    $this->input->post('content'),
                    $this->input->post('buy')
                );
                if($result)
                {
                    $this->session->unset_userdata('picUrl');
                    if($this->input->post('button')=='add')
                    {
                        $this->session->set_userdata('partNum', $partNum+1);
                        header('location:/upload/parts');
                    }
                    else
                    {
                        $this->session->unset_userdata('mid');
                        header('location:/');
                    }
                }
                else
                {
                    $data = array(
                        'partnum' => $partNum,
                        'full_path' => $picUrl,
                        'systemerror' => 'system error',
                    );
                    $this->load->view('uploadParts',$data);
                }
            }
        }
    }
}