<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-07
 * Time: 15:10
 */
class FriendModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function addFriend($id,$friendid)
    {
        $data = array(
            'userid' => $id,
            'friendid' => $friendid,
        );
        return $this->db->insert('friend', $data);
    }
    public function deleteFriend($id,$friendid)
    {
        $data = array(
            'userid' => $id,
            'friendid' => $friendid,
        );
        return $this->db->delete('friend', $data);
    }
    public function getByUid($uid)
    {
        $sql='SELECT picture,name,level,id FROM user,friend WHERE user.id=friend.userid and friend.friendid=? and friend.isread=0';
        $query = $this->db->query($sql, array($uid));
        return $query->result_array();
    }

    public function read($userid,$friendid)
    {
        return $this->db->update('friend', array('isread' => 1), array('userid' => $userid,'friendid'=>$friendid));
    }
    
}