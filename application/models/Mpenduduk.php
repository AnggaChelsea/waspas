<?php if (!defined('BASEPATH')) exit('No Direct Script Access Allowed');

class mpenduduk extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function get_data_user_count($level)
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('tb_user');
        $this->db->where('level', $level);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }

    function get_data_count()
    {
        $this->db->select('count(*) as allcount');
        $this->db->from('tb_penduduk');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }

    function get_data_penduduk()
    {
        $this->db->select('*');
        $this->db->from('tb_penduduk');
        $this->db->order_by('id_penduduk', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_data_penduduk_nilai()
    {
        $this->db->select('P.*,P.nama AS nm_pdk,PN.*');
        $this->db->from('tb_penduduk_nilai AS PN');
        $this->db->join('tb_penduduk AS P', 'P.id_penduduk = PN.id_penduduk', 'left');

        $query = $this->db->get();
        return $query->result_array();
    }

    function get_data_penduduk_nilaic_id($id)
    {
        $this->db->select('*');
        $this->db->from('tb_penduduk_nilai');
        $this->db->where('id_penduduk', $id);
        $this->db->order_by('id_penduduk_nilai', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_data_penduduk_nilai_get($id)
    {
        $this->db->select('P.*,P.nama AS nm_pdk,PN.*');
        $this->db->from('tb_penduduk AS P');
        $this->db->join('tb_penduduk_nilai AS PN', 'PN.id_penduduk = P.id_penduduk', 'left');
        $this->db->where('P.id_penduduk', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    function get_data_penduduk_id($id)
    {
        return $this->db->get_where('tb_penduduk', array('id_penduduk' => $id))->row_array();
    }

    function get_data_penduduk_username($id)
    {
        return $this->db->get_where('tb_penduduk', array('nik' => $id))->row_array();
    }

    function get_data_penduduk_nilai_id($id)
    {
        return $this->db->get_where('tb_penduduk_nilai', array('id_penduduk_nilai' => $id))->row_array();
    }

    function edit_pass($id, $params)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_user', $params);
        return $this->db->insert_id();
    }

    function delete_penduduk($id)
    {
        return $this->db->delete('tb_penduduk', array('id_penduduk' => $id));
    }

    function delete_penduduk_login($id)
    {
        return $this->db->delete('tb_user', array('username' => $id));
    }

    function delete_penduduk_nilai2($id)
    {
        return $this->db->delete('tb_penduduk_nilai', array('id_penduduk' => $id));
    }

    function delete_penduduk_nilai($id)
    {
        return $this->db->delete('tb_penduduk_nilai', array('id_penduduk_nilai' => $id));
    }

    function add_penduduk($params)
    {
        $this->db->insert('tb_penduduk', $params);
        return $this->db->insert_id();
    }

    function add_penduduk_login($params)
    {
        $this->db->insert('tb_user', $params);
        return $this->db->insert_id();
    }
}
