<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Coutput extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        login_timeout();
        $this->load->model('Mpenduduk');
        $this->load->model('Mdatakriteria');
    }

    function index()
    {
        $data['data_penduduk'] = $this->Mpenduduk->get_data_penduduk();
        $data['data_penduduk_nilai'] = $this->Mpenduduk->get_data_penduduk_nilai();

        $c1 = 0.1;
        $c2 = 0.05;
        $c3 = 0.15;
        $c4 = 0.15;
       
        $arHasil = array();
        foreach ($data['data_penduduk_nilai'] as $nilai) {
            $h1 = $this->Mdatakriteria->get_data_nilai_kriteria_id($nilai['C1'])['nilai'] / 4;
            $h2 = $this->Mdatakriteria->get_data_nilai_kriteria_id($nilai['C2'])['nilai'] / 4;
            $h3 = $this->Mdatakriteria->get_data_nilai_kriteria_id($nilai['C3'])['nilai'] / 4;
            $h4 = $this->Mdatakriteria->get_data_nilai_kriteria_id($nilai['C4'])['nilai'] / 4;

            $rumus =  ((0.5) * (($h1 * $c1) + ($h2 * $c2) + ($h3 * $c3) + ($h4 * $c4) ))
                + ((0.5) * ((pow($h1, $c1)) * (pow($h2, $c2)) * (pow($h3, $c3)) * (pow($h4, $c4)) ));

            array_push($arHasil, array("nilai" => round($rumus, 2), "id_penduduk" => $nilai['id_penduduk']));
        }

        rsort($arHasil);

        $data['data_penduduk_hasil'] = $arHasil;
        $isi =  $this->template->display('admin/content/output/index', $data);
        $this->load->view('admin/vutama', $isi);
    }
}
