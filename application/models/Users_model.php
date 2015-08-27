<?php
/**
 * Created by PhpStorm.
 * User: bclincy
 * Date: 5/17/15
 * Time: 11:06 AM
 */

class Users_model extends CI_Model{

    public function getUser($email, $pasword)
    {
        $sql = "SELECT * FROM users WHERE username=".$this->db->escape($this->post->email).
            " AND password = password($this->db->escape($this->post->))";
//        $results = $this->db->query('SELECT name, title, email FROM my_table');
//        $sql = 'SELECT * FROM users WHERE username= @username LIMIT @limit';
//        $this->db->bind('@column', 'username');
//        $this->db->bind('@table', 'users');
//        $this->db->bind('@limit', 10);
        $sql = "SELECT * FROM users WHERE email=? and passwd= password(?)";

        $this->db->query($sql, array($email, $password));
        $results = $this->db->query($sql);

    }

}