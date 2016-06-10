<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-07
 * Time: 23:21
 */
class LikeModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function isExist($userid,$mid)
    {
        $data = array(
            'userid' => $userid,
            'matchingid' => $mid,
        );
        $query = $this->db->get_where('likeit', $data);
        $row = $query->row();
        if (isset($row)) return true;
        else return false;
    }
    
    public function like($userid,$mid)
    {
        $data = array(
            'userid' => $userid,
            'matchingid' => $mid,
        );
        return $this->db->insert('likeit', $data);
    }
    public function unlike($userid,$mid)
    {
        $data = array(
            'userid' => $userid,
            'matchingid' => $mid,
        );
        return $this->db->delete('likeit', $data);
    }
    public function getLikeNum($id)
    {
        $sql='SELECT COUNT(isread) AS likenum FROM likeit WHERE matchingid=?';
        $query = $this->db->query($sql, array($id));
        $row=$query->row_array();
        return $row['likenum'];
    }
    public function getByUid($uid)
    {
        $sql='SELECT likeit.userid AS userid,matchingid,name FROM likeit,matching,user WHERE isread=0 and matchingid=matching.id and matching.userid=? and likeit.userid=user.id';
        $query = $this->db->query($sql, array($uid));
        return $query->result_array();
    }

    public function read($userid,$matchingid)
    {
        return $this->db->update('likeit', array('isread' => 1), array('userid' => $userid,'matchingid'=>$matchingid));
    }
}