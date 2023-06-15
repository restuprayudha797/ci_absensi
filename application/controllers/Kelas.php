<?php

class Kelas extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //* load helper clogin
    check_login();
    $this->load->model('Kelas_model', 'km');
  }

  public function index()
  {
    $data['title'] = 'Data Kelas';
    $data['user'] = $this->db->get_where('users', ['id_user' => $this->session->userdata('id_user')])->row_array();
    $data['kelas'] = $this->km->getAllKelas();


    $this->form_validation->set_rules('kelas', 'Kelas', 'required');
    $this->form_validation->set_rules('nama_jurusan', 'Nama Jurusan', 'required');
    $this->form_validation->set_rules('singkatan_jurusan', 'Singkatan Jurusan', 'required');
    $this->form_validation->set_rules('nama_kelas', 'Nama_kelas', 'required');

    if ($this->form_validation->run() == false) {

      $this->load->view('backend/template/header', $data);
      $this->load->view('backend/template/navbar');
      $this->load->view('backend/admin-absensi/kelas/index');
      $this->load->view('backend/template/footer');
    } else {
      $this->km->insertDataKelas();
    }
  }

  public function delete($id)
  {
    // cek database siswa

    $siswa = $this->db->get_where('siswa', ['id_kelas' => $id])->row_array();

    if ($siswa) {
      // jika siswa ada maka data kelas tidak boleh dihapus
      $this->session->set_flashdata('kelas_message', ' <div class="alert alert-danger" id="notification" role="alert">
       Data Kelas Tidak Boleh Dihapus!
       </div>');
      redirect('kelas');
    } else {
      // jika siswa tidak ada data kelas boleh di hapus
      $this->db->delete('kelas', ['id_kelas' => $id]);
      $this->session->set_flashdata('kelas_message', ' <div class="alert alert-success" id="notification" role="alert">
      Data Kelas Berhasil Dihapus!
      </div>');
      redirect('kelas');
    }
  }

  public function update($id)
  {
    // cek database siswa
    $data['title'] = 'Update Data Kelas';
    $data['kelas'] = $this->km->getKelasById($id);

    // set rules

    $this->form_validation->set_rules('kelas', 'Kelas', 'required');
    $this->form_validation->set_rules('nama_jurusan', 'Nama Jurusan', 'required');
    $this->form_validation->set_rules('singkatan_jurusan', 'Singkatan Jurusan', 'required');
    $this->form_validation->set_rules('nama_kelas', 'Nama_kelas', 'required');

    if ($this->form_validation->run() == false) {

      $this->load->view('backend/admin-absensi/kelas/update-kelas', $data);
    } else {

      $this->km->update($id);
    }
  }
}
