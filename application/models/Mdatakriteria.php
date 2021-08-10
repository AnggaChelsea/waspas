<?php if (!defined('BASEPATH')) exit('No Direct Script Access Allowed');

class mdatakriteria extends CI_Model
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
        $this->db->from('tb_kriteria');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result[0]['allcount'];
    }

    function get_data_kriteria()
    {
        $this->db->select('*');
        $this->db->from('tb_kriteria');
        $this->db->order_by('id_kriteria', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_data_nilai_kriteria($id_kriteria)
    {
        $this->db->select('*');
        $this->db->from('tb_nilai_kriteria');
        $this->db->where('id_kriteria', $id_kriteria);
        $this->db->order_by('nilai', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_data_nilai_kriteria_id($id)
    {
        return $this->db->get_where('tb_nilai_kriteria', array('id_nilai_kriteria' => $id))->row_array();
    }
}
