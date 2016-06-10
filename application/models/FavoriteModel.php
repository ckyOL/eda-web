<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-07
 * Time: 22:28
 */
class FavoriteModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function favorite($userid,$mid)
    {
        $data = array(
            'userid' => $userid,
            'matchingid' => $mid,
        );
        return $this->db->insert('favorite', $data);
    }
    public function cancelFavorite($userid,$mid)
    {
        $data = array(
            'userid' => $userid,
            'matchingid' => $mid,
        );
        return $this->db->delete('favorite', $data);
    }
}