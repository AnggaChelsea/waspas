<?php if (!defined('BASEPATH')) exit('no direct script access allowed');

class mlogin extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get('tb_user');
        return ($query->num_rows() > 0) ? $query->row() : FALSE;
    }
}
