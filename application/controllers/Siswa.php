<?php

class Siswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // load model
        $this->load->model('Kelas_model', 'km');
        $this->load->model('Siswa_model', 'sm');

        // end load model


        //* load helper clogin
        check_login();
    }

    public function index()
    {


        $data['title'] = 'Data Siswa';
        $data['user'] = $this->db->get_where('users', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['siswa'] = $this->sm->getAllSiswa();

        $this->form_validation->set_rules('kelas', 'Kelas', 'required');


        if ($this->form_validation->run() == false) {

            $this->load->view('backend/template/header', $data);
            $this->load->view('backend/template/navbar');
            $this->load->view('backend/admin-absensi/siswa/index');
            $this->load->view('backend/template/footer');
        }
    }

    public function update($id)
    {
        $data['title'] = 'update data siswa';
        $data['siswa'] = $this->sm->getSiswaById($id);
        $data['kelas'] = $this->km->getAllKelas();


        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('tetala', 'Tetala', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('golongan_darah', 'Golongan Darah', 'required');
        $this->form_validation->set_rules('no_telp_wali_murid', 'no tlp wali murid', 'required');


        if ($this->form_validation->run() == false) {

            $this->load->view('backend/admin-absensi/siswa/update-siswa', $data);
        } else {

            $this->sm->update($id);
        }
    }


    public function delete($id)
    {
    }
}
