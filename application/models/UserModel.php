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
    
    public function updateUser()
    {
        
    }

}

?>