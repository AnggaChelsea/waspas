<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prosesspk extends CI_Controller
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
           

            $rumus =  ((0.5) * (($h1 * $c1) + ($h2 * $c2) + ($h3 * $c3) + ($h4 * $c4) ))
                + ((0.5) * ((pow($h1, $c1)) * (pow($h2, $c2)) * (pow($h3, $c3)) * (pow($h4, $c4))));


            array_push($arHasil, array("nilai" => round($rumus, 2), "id_penduduk" => $nilai['id_penduduk']));
        }

        rsort($arHasil);

        $data['data_penduduk_hasil'] = $arHasil;
        $isi =  $this->template->display('admin/content/prosesspk/index', $data);
        $this->load->view('admin/vutama', $isi);
    }

    function add()
    {
        if (isset($_POST) && count($_POST) > 0) {
            if ($this->check_nik($this->input->post('nik'))) {
                $this->session->set_flashdata('username', 'Username sudah digunakan');
                redirect('data-penduduk');
                die();
            } else {
                if ($this->input->post('level') == "3") {
                    $no_agen = $this->input->post('no_agen');
                } else {
                    $no_agen = 0;
                }
                $params = array(
                    'nama' => $this->input->post('nama'),
                    'nik' => $this->input->post('nik')
                );
                $this->Mpenduduk->add_penduduk($params);
                $this->session->set_flashdata('success', "Data Penduduk Berhasil ditambahkan");
                redirect('data-penduduk');
            }
        }
    }

    function add_nilai()
    {
        if (isset($_POST) && count($_POST) > 0) {
            $num = 1;
            $data['id_penduduk'] = $this->input->post('id_penduduk');
            foreach ($_POST["kriteria"] as $email) {
                $data['C' . '' . $num++] = $email;
            }
            $this->db->insert('tb_penduduk_nilai', $data);
            $this->db->insert_id();
            redirect('data-penduduk');
        } else {
            $data['data_penduduk'] = $this->Mpenduduk->get_data_penduduk();
            $data['data_kriteria'] = $this->Mdatakriteria->get_data_kriteria();
            $isi =  $this->template->display('admin/content/penduduk/addnilai', $data);
            $this->load->view('admin/vutama', $isi);
        }
    }


    function edit($id)
    {
        if (isset($_POST) && count($_POST) > 0) {
            $params = array(
                'nama' => $this->input->post('nama')
            );
            $this->db->where('id_penduduk', $id);
            $this->db->update('tb_penduduk', $params);
            redirect('data-penduduk');
        } else {
            $data['data_penduduk'] = $this->Mpenduduk->get_data_penduduk_id($id);
            $isi =  $this->template->display('admin/content/penduduk/edit', $data);
            $this->load->view('admin/vutama', $isi);
        }
    }

    function edit_penduduk_nilai($id)
    {
        if (isset($_POST) && count($_POST) > 0) {
            $num = 1;

            foreach ($_POST["kriteria"] as $email) {
                $data['C' . '' . $num++] = $email;
            }
            var_dump($data);

            $this->db->where('id_penduduk_nilai', $id);
            $this->db->update('tb_penduduk_nilai', $data);
            redirect('data-penduduk');
        } else {
            $data['data_penduduk'] = $this->Mpenduduk->get_data_penduduk();
            $data['data_kriteria'] = $this->Mdatakriteria->get_data_kriteria();
            $data['data_penduduk_nilai'] = $this->Mpenduduk->get_data_penduduk_nilai_id($id);
            $isi =  $this->template->display('admin/content/penduduk/editnilai', $data);
            $this->load->view('admin/vutama', $isi);
        }
    }

    function remove($id)
    {
        $this->Mpenduduk->delete_penduduk($id);
        echo "<script>history.go(-1)</script>";
    }

    function removenilai($id)
    {
        $this->Mpenduduk->delete_penduduk_nilai($id);
        echo "<script>history.go(-1)</script>";
    }

    function check_nik($nik)
    {
        $this->db->where('nik', $nik);
        $query = $this->db->get('tb_penduduk');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
