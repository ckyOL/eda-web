<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-01
 * Time: 15:50
 */
class MatchingModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function getHotMatching()
    {
        $sql='SELECT * from (SELECT matching.id as id,p1,matching.sex as sex,reviews,matching.time AS mtime,matching.userid AS author,COUNT(isread) AS num,name from matching LEFT JOIN likeit ON matching.id = likeit.matchingid,user WHERE hide=0 AND matching.userid=user.id GROUP BY matching.id ORDER BY mtime DESC LIMIT 0,50) s1 ORDER BY num DESC';
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function getFriendMatching($id)
    {
        $sql='SELECT matching.id as id,p1,matching.sex as sex,reviews,matching.time AS mtime,matching.userid AS author,COUNT(likeit.isread) AS num,name from matching LEFT JOIN likeit ON matching.id = likeit.matchingid,friend,user WHERE hide=0 AND matching.userid=user.id AND matching.userid=friend.friendid and friend.userid=1 GROUP BY matching.id ORDER BY mtime DESC LIMIT 0,50';
        $query = $this->db->query($sql, array($id));
        return $query->result_array();
    }
    public function getCollectMatching($id)
    {
        $sql='SELECT matching.id,p1,matching.sex,reviews,matching.time AS mtime,matching.userid AS author,COUNT(likeit.isread) AS num,name from matching LEFT JOIN likeit ON matching.id = likeit.matchingid,favorite,user WHERE hide=0 AND matching.userid=user.id AND matching.id=favorite.matchingid and favorite.userid=? GROUP BY matching.id ORDER BY mtime DESC LIMIT 0,50';
        $query = $this->db->query($sql, array($id));
        return $query->result_array();
    }
    public function getMyMatching($id)
    {
        $sql='SELECT matching.id as id,p1,matching.sex as sex,reviews,matching.time AS mtime,matching.userid AS author,COUNT(isread) AS num,name from matching LEFT JOIN likeit ON matching.id = likeit.matchingid,user WHERE hide=0 AND matching.userid=user.id AND matching.userid=? GROUP BY matching.id ORDER BY mtime DESC LIMIT 0,50';
        $query = $this->db->query($sql, array($id));
        return $query->result_array();
    }
    public function searchMatching($words)
    {
        $sql="SELECT matching.id as id,p1,matching.sex as sex,reviews,matching.time AS mtime,matching.userid AS author,COUNT(isread) AS num,name from matching LEFT JOIN likeit ON matching.id = likeit.matchingid,user WHERE hide=0 AND matching.userid=user.id AND style LIKE ? OR scenario LIKE ? OR season LIKE ? OR name LIKE ? GROUP BY matching.id ORDER BY mtime DESC LIMIT 0,50";
        $words='%'.$words.'%';
        $query = $this->db->query($sql, array($words,$words,$words,$words));
        return $query->result_array();
    }
    
    public function delete($userid,$mid)
    {
        $data = array(
            'userid' => $userid,
            'id' => $mid,
        );
        return $this->db->delete('matching', $data);
    }

    public function push($userid,$picUrl,$style,$scenario,$season,$sex,$reviews)
    {
        $data = array(
            'p1' => $picUrl,
            'style' => $style,
            'scenario' => $scenario,
            'season' => $season,
            'sex' => $sex,
            'reviews' => $reviews,
            'userid' => $userid,
        );
        if($this->db->insert('matching', $data))
        {
            return $this->db->insert_id();
        }
        else
        {
            return -1;
        }
    }
    
    public function getById($id)
    {
        $query = $this->db->get_where('matching', array('id' => $id,'hide' => 0));
        return $query->row_array();
    }
    
    public function getByUid($uid)
    {
        $sql='SELECT id,p1,reviews,COUNT(isread) AS num from matching LEFT JOIN likeit ON matching.id = likeit.matchingid WHERE matching.userid=?';
        $query = $this->db->query($sql, array($uid));
        return $query->result_array();
    }
    
}

?>