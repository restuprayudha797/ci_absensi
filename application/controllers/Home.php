<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model', 'sm');
        $this->load->model('Absensi_model', 'am');
    }

    public function index()
    {


        $this->load->view('front-end/index');
    }

    public function perizinan()
    {

        $this->form_validation->set_rules('exampleDataList', 'NAMA', 'required|numeric');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        $data['siswa'] = $this->sm->getAllSiswa();


        if($this->form_validation->run() == false){

            $this->load->view('front-end/izin', $data);
        }else{
            // cek apakah siswa yang dipilih ada
            $nisn = $this->input->post('exampleDataList', true);
            $checkStudent = $this->db->get_where('siswa', ['nisn' => $nisn])->row_array();

            if($checkStudent){
                $this->am->insertIzinSiswa();
            }else{
                echo 'Siswa Tidak Dapat Ditemukan';
            }
        }
    }
}
