<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-04
 * Time: 13:18
 */
class Search extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('UserModel');
        $this->load->model('MatchingModel');
    }

    public function index()
    {

        $words=$this->input->post('searchcontent');

        $cards=$this->MatchingModel->searchMatching($words); 
        if(isset($this->session->userid))
        {
            $id=$this->session->userid;
            $date=array(
                'userName' => $this->UserModel->getName($id),
                'pictureUrl' => $this->UserModel->getPicture($id),
                'cards' => $cards,
                'searchwords' => 'Your search results of '.$words.':'
            );
            $this->load->view('/hot',$date); 
        }
        else
        {
            $date['searchwords']='Your search results of '.$words.':';
            $date['cards']=$cards;
            $this->load->view('/index',$date);
        }
    }
}