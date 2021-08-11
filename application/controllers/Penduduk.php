<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk extends CI_Controller
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
        // var_dump($data['data_penduduk_nilai']);
        // die();
        $isi =  $this->template->display('admin/content/penduduk/index', $data);
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
                );

                $params2 = array(
                    'username' => $this->input->post('nik'),
                    'password' => $this->input->post('nik'),
                    'nama' => $this->input->post('nama'),
                    'status' => 1,
                    'level' => 3
                );

                $this->Mpenduduk->add_penduduk($params);
                $this->Mpenduduk->add_penduduk_login($params2);
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

            $arNilai = array();
            foreach ($this->Mpenduduk->get_data_penduduk_nilai() as $key) {
                array_push($arNilai, $key['id_penduduk']);
            }
            $data['arNilaii'] = $arNilai;
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
                'nama' => $this->input->post('nama'),
                'jk' => $this->input->post('jk'),
                'alamat' => $this->input->post('alamat'),
                'notelp' => $this->input->post('notelp')
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
        $pdk = $this->Mpenduduk->get_data_penduduk_id($id);
        $this->Mpenduduk->delete_penduduk($id);
        $this->Mpenduduk->delete_penduduk_login($pdk['nik']);
        $this->Mpenduduk->delete_penduduk_nilai2($id);
        echo "<script>history.go(-1)</script>";
    }

    function removenilai($id)
    {
        $this->Mpenduduk->delete_penduduk_nilai($id);
        echo "<script>history.go(-1)</script>";
    }

    function ambil_data()
    {
        $id = $this->input->post('id');
        $nama = $this->db->get_where('tb_penduduk', array('id_penduduk' => $id))->row_array();
        echo $nama['nama'];
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
