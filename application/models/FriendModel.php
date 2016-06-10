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
    
}