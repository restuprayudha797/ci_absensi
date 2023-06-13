<?php

class Kelas extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Kelas_model', 'km');
  }

  public function index()
  {
    $data['title'] = 'Data Kelas';
    $data['user'] = $this->db->get_where('users', ['id_user' => $this->session->userdata('id_user')])->row_array();
    $data['kelas'] = $this->km->getAllKelas();

    $this->load->view('backend/template/header', $data);
    $this->load->view('backend/template/navbar');
    $this->load->view('backend/admin-absensi/kelas/index');
    $this->load->view('backend/template/footer');
  }

  public function hapusKelas($id)
  {
    $this->km->hapusDataKelas($id);
    redirect('kelas');
  }
}
