<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cdata_kriteria extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    login_timeout();
    $this->load->model('Mdatakriteria');
  }

  function index()
  {
    $data['data'] = $this->Mdatakriteria->get_data_kriteria();
    $isi =  $this->template->display('admin/content/data_kriteria/index', $data);
    $this->load->view('admin/vutama', $isi);
  }

  function profil()
  {
    $data['dataadmin'] = $this->Madmin->get_data_id($this->session->userdata('id'));
    $isi =  $this->template->display('admin/content/admin/profil', $data);
    $this->load->view('admin/vutama', $isi);
  }


  function edit($id)
  {
    if (isset($_POST) && count($_POST) > 0) {
      $params = array(
        // 'pilihan' => $this->input->post('pilihan'),
        'nilai' => $this->input->post('nilai')
      );
      $this->db->where('id_nilai_kriteria', $id);
      $this->db->update('tb_nilai_kriteria', $params);
      redirect('data-kriteria');
    } else {
      $data['datanilai'] = $this->Mdatakriteria->get_data_nilai_kriteria_id($id);
      $isi =  $this->template->display('admin/content/data_kriteria/edit', $data);
      $this->load->view('admin/vutama', $isi);
    }
  }
}
