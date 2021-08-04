<?php
defined('BASEPATH') or exit('No direct script access allowed');

class chome extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    login_timeout();
    $this->load->library('cfpdf');
    $this->load->model('Mpenduduk');
    $this->load->model('Mdatakriteria');
    $this->load->library('otherLibrary');
  }

  public function index()
  {
    if ($_SESSION['level'] == 3) {

      $pdk = $this->Mpenduduk->get_data_penduduk_username($_SESSION['username']);

      $data['data_penduduk'] = $this->Mpenduduk->get_data_penduduk();
      $data['data_kriteria'] = $this->Mdatakriteria->get_data_kriteria();
      $data['data_penduduk_nilai'] = $this->Mpenduduk->get_data_penduduk_nilai_get($pdk['id_penduduk']);
      var_dump($data['data_penduduk_nilai']);
      //die();
      $isi =  $this->template->display('admin/content/penduduk/penduduk_get', $data);
      $this->load->view('admin/vutama', $isi);
    } else {
      $isi =  $this->template->display('admin/content/home/vhomepj');
      $this->load->view('admin/vutama', $isi);
    }
  }

  function penerima_bantuan()
  {
    $data['data_penduduk'] = $this->Mpenduduk->get_data_penduduk();
    $data['data_penduduk_nilai'] = $this->Mpenduduk->get_data_penduduk_nilai();


    $c1 = 0.1;
    $c2 = 0.05;
    $c3 = 0.15;
    $c4 = 0.15;
    $c5 = 0.1;
    $c6 = 0.1;
    $c7 = 0.1;
    $c8 = 0.15;
    $c9 = 0.1;

    $arHasil = array();
    foreach ($data['data_penduduk_nilai'] as $nilai) {
      $h1 = $this->Mdatakriteria->get_data_nilai_kriteria_id($nilai['C1'])['nilai'] / 4;
      $h2 = $this->Mdatakriteria->get_data_nilai_kriteria_id($nilai['C2'])['nilai'] / 4;
      $h3 = $this->Mdatakriteria->get_data_nilai_kriteria_id($nilai['C3'])['nilai'] / 4;
      $h4 = $this->Mdatakriteria->get_data_nilai_kriteria_id($nilai['C4'])['nilai'] / 4;
      $h5 = $this->Mdatakriteria->get_data_nilai_kriteria_id($nilai['C5'])['nilai'] / 4;
      $h6 = $this->Mdatakriteria->get_data_nilai_kriteria_id($nilai['C6'])['nilai'] / 4;
      $h7 = $this->Mdatakriteria->get_data_nilai_kriteria_id($nilai['C7'])['nilai'] / 4;
      $h8 = $this->Mdatakriteria->get_data_nilai_kriteria_id($nilai['C8'])['nilai'] / 4;
      $h9 = $this->Mdatakriteria->get_data_nilai_kriteria_id($nilai['C9'])['nilai'] / 4;

      $rumus =  ((0.5) * (($h1 * $c1) + ($h2 * $c2) + ($h3 * $c3) + ($h4 * $c4) + ($h5 * $c5) + ($h6 * $c6) + ($h7 * $c7) + ($h8 * $c8) + ($h9 * $c9)))
        + ((0.5) * ((pow($h1, $c1)) * (pow($h2, $c2)) * (pow($h3, $c3)) * (pow($h4, $c4)) * (pow($h5, $c5)) * (pow($h6, $c6)) * (pow($h7, $c7)) * (pow($h8, $c8)) * (pow($h9, $c9))));


      array_push($arHasil, array("nilai" => round($rumus, 2), "id_penduduk" => $nilai['id_penduduk']));
    }

    rsort($arHasil);

    $data['data_penduduk_hasil'] = $arHasil;
    $isi =  $this->template->display('admin/content/penduduk/daftar_penerima', $data);
    $this->load->view('admin/vutama', $isi);
  }
}
