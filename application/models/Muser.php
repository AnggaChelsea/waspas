<?php

class Muser extends CI_Model
{

    private $_username;
    private $_password;

    public function __construct()
    {
        parent::__construct();
    }

    public function siteman()
    {


        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        $select = $this->input->post('select');

        if ($select == "1") {
            // Cek Inputan Username dan Password
            if (empty($user) || empty($pass)) {
                $_SESSION['login'] = -1;
            } else {
                //$password = sha1($pass);

                // Jika Sudah Terisi Kirim Parameter Username ke Model Login
                $result = $this->login($user, $pass);
                if ($result) {
                    // Simpan Session Username 
                    $data = array(
                        'id' => $result->id,
                        'username' => $result->username,
                        'nama' => $result->nama,
                        'level' => $result->level,
                        'login' => 1
                    );
                    $this->session->set_userdata($data);
                } else {
                    $_SESSION['login'] = -1;
                }
            }
        } else {
            if (empty($user)) {
                $_SESSION['login'] = -1;
            } else {
                // Jika Sudah Terisi Kirim Parameter Username ke Model Login
                $result = $this->login_penduduk($user);
                if ($result) {
                    // Simpan Session Username 
                    $data = array(
                        'id_penduduk' => $result->id_penduduk,
                        'username' => $result->nik,
                        'nama' => $result->nama,
                        'level' => 3,
                        'login' => 1
                    );
                    $this->session->set_userdata($data);
                } else {
                    $_SESSION['login'] = -1;
                }
            }
        }
    }

    function login($username, $password)
    {

        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get('tb_user');
        return ($query->num_rows() > 0) ? $query->row() : FALSE;
    }

    public function logout()
    {
        unset(
            $_SESSION['username'],
            $_SESSION['nama'],
            $_SESSION['status'],
            $_SESSION['login'],
            $_SESSION['level']
        );
        $this->session->sess_destroy();
        redirect('LoginDesa');
    }
}
