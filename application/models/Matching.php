<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-01
 * Time: 15:50
 */
class Matching extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function getHotMatching()
    {
        $sql='SELECT * from (SELECT matching.id as id,p1,matching.sex as sex,reviews,matching.time AS mtime,matching.userid AS author,COUNT(isread) AS num,name from matching,likeit,user WHERE hide=0 AND matching.userid=user.id ORDER BY mtime DESC LIMIT 0,50) s1 ORDER BY num DESC';
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function getFriendMatching($id)
    {
        $sql='SELECT matching.id as id,p1,matching.sex as sex,reviews,matching.time AS mtime,matching.userid AS author,COUNT(likeit.isread) AS num,name from matching,likeit,friend,user WHERE hide=0 AND matching.userid=user.id AND matching.userid=friend.friendid and friend.userid=1 ORDER BY mtime DESC LIMIT 0,50';
        $query = $this->db->query($sql, array($id));
        return $query->result_array();
    }
    public function getCollectMatching($id)
    {
        $sql='SELECT matching.id,p1,matching.sex,reviews,matching.time AS mtime,matching.userid AS author,COUNT(likeit.isread) AS num,name from matching,likeit,favorite,user WHERE hide=0 AND matching.userid=user.id AND matching.id=favorite.matchingid and favorite.userid=? ORDER BY mtime DESC LIMIT 0,50';
        $query = $this->db->query($sql, array($id));
        return $query->result_array();
    }
    public function getMyMatching($id)
    {
        $sql='SELECT matching.id as id,p1,matching.sex as sex,reviews,matching.time AS mtime,matching.userid AS author,COUNT(isread) AS num,name from matching,likeit,user WHERE hide=0 AND matching.userid=user.id AND matching.userid=? ORDER BY mtime DESC LIMIT 0,50';
        $query = $this->db->query($sql, array($id));
        return $query->result_array();
    }
    public function searchMatching($words)
    {
        $sql="SELECT matching.id as id,p1,matching.sex as sex,reviews,matching.time AS mtime,matching.userid AS author,COUNT(isread) AS num,name from matching,likeit,user WHERE hide=0 AND matching.userid=user.id AND style LIKE '%?%' OR scenario LIKE '%?%' OR season LIKE '%?%' ORDER BY mtime DESC LIMIT 0,50";
        $query = $this->db->query($sql, array($words,$words,$words));
        return $query->result_array();
    }
    
    public function deleteMatching($userid,$mid)
    {
        
    }
}

?>