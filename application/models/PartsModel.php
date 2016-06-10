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
    public function getByMid($mid)
    {
        $query = $this->db->get_where('parts', array('matchingid' => $mid));
        return $query->result_array();
    }

    public function getMid($id)
    {
        $query = $this->db->get_where('parts', array('id' => $id));
        $row=$query->row_array();
        return $row['matchingid'];
    }

    public function getById($id)
    {
        $query = $this->db->get_where('parts', array('id' => $id));
        return $query->row_array();
    }

    public function update($id,$type,$content)
    {
        $data=array(
            'type' => $type,
            'content' => $content,
        );
        return $this->db->update('parts', $data, array('id' => $id));
    }
}