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
        $data['kelas'] = $this->km->getAllKelas();
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

        $this->load->view('backend/admin-absensi/siswa/update-siswa', $data);
    }


    public function delete($id)
    {
    }
}
