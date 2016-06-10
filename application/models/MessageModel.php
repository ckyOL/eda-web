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

}