<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-07
 * Time: 15:19
 */
class Comment extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function comment($userid,$mid,$content)
    {
        
    }
    public function deleteComment($id,$cid)
    {
        
    }
}