<?php
/**
 * Created by PhpStorm.
 * User: piekey1994
 * Date: 2016-06-01
 * Time: 15:50
 */
class UserModel extends CI_Model
{
    private $table='user';
    public function __construct()
    {
        $this->load->database();
    }
    public function login($username,$password)
    {
        $query = $this->db->get_where($this->table, array('name' => $username,'password' => $password));
        $row = $query->row();
        if (isset($row)) return $row->id;
        else return -1;
    }
    public function registerUser($username,$password)
    {
        $data = array(
            'name' => $username,
            'password' => $password,
        );
        return $this->db->insert($this->table, $data);
    }
    
    public function getName($id)
    {
        $query = $this->db->get_where($this->table, array('id' => $id));
        $row = $query->row();
        if (isset($row)) return $row->name;
        else return '%unknown%';
    }
    
    public function getPicture($id)
    {
        $query = $this->db->get_where($this->table, array('id' => $id));
        $row = $query->row();
        if (isset($row)) return $row->picture;
        else return '%unknown%';
    }

    public function updatePic($id,$picUrl)
    {
        return $this->db->update('user', array('picture' => $picUrl), array('id' => $id));
    }

    public function updateUser($id,$name,$password,$sex,$signature)
    {
        $data=array(
            'name' => $name,
            'password' => $password,
            'sex' => $sex,
            'signature' => $signature,
        );
        return $this->db->update('user', $data, array('id' => $id));
    }
    
    public function getById($id)
    {
        $query = $this->db->get_where('user', array('id' => $id));
        return $query->row_array();
    }
    
    public function getFriends($id)
    {
        $sql='SELECT user.id AS id,name,picture,sex,signature,level from user,friend WHERE friend.userid=? and friend.friendid=user.id';
        $query = $this->db->query($sql, array($id));
        return $query->result_array();
    }

}

?>