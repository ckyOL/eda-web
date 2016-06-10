<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-10
 * Time: 20:46
 */

class MessageModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function send($srcid,$detid,$matchingid,$title,$content)
    {
        $data = array(
            'srcid' => $srcid,
            'detid' => $detid,
            'matchingid' => $matchingid,
            'title' => $title,
            'content' => $content,
        );
        return $this->db->insert('message', $data);
    }
    public function getByUid($uid)
    {
        $sql='SELECT message.id AS id,name,matchingid,title,content FROM message,user WHERE isread=0 and srcid=user.id and detid=?';
        $query = $this->db->query($sql, array($uid));
        return $query->result_array();
    }

    public function read($id)
    {
        return $this->db->update('message', array('isread' => 1), array('id' => $id));
    }

    public function getById($id)
    {
        $query = $this->db->get_where('message', array('id' => $id));
        return $query->row_array();
    }


}