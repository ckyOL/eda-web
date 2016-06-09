<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-09
 * Time: 16:48
 */
class PartsModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function push($mid,$picUrl,$type,$brand,$content,$buy)
    {
        $data = array(
            'matchingid' => $mid,
            'picture' => $picUrl,
            'type' => $type,
            'brand' => $brand,
            'content' => $content,
            'buy' => $buy,
        );
        return $this->db->insert('parts', $data);
    }
}