<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-07
 * Time: 15:19
 */
class CommentModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function comment($userid,$mid,$content)
    {
        $data = array(
            'userid' => $userid,
            'matchingid' => $mid,
            'content' => $content
        );
        return $this->db->insert('comment', $data);
    }
    public function deleteComment($id,$cid)
    {

    }
    public function getByMid($mid)
    {
        $sql='SELECT content,comment.time AS time,name FROM comment,user where comment.userid=user.id AND matchingid=?';
        $query = $this->db->query($sql, array($mid));
        return $query->result_array();
    }
}