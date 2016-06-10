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

    public function getByMid($mid)
    {
        $sql='SELECT content,comment.time AS time,name FROM comment,user where comment.userid=user.id AND matchingid=?';
        $query = $this->db->query($sql, array($mid));
        return $query->result_array();
    }

    public function getByUid($uid)
    {
        $sql='SELECT comment.id AS id,comment.userid AS userid,matchingid,content,name FROM comment,matching,user WHERE comment.matchingid=matching.id and matching.userid=? and isread=0 and user.id=matching.userid';
        $query = $this->db->query($sql, array($uid));
        return $query->result_array();
    }

    public function read($id)
    {
        return $this->db->update('comment', array('isread' => 1), array('id' => $id));
    }
}