<?php

class Kelas_model extends CI_Model
{

  private $_kelas = 'kelas';

  public function getAllKelas()
  {
    return $this->db->get($this->_kelas)->result_array();
  }

  public function getKelasById($id)
  {

    return $this->db->get_where($this->_kelas, ['id_kelas' => $id])->row_array();
  }


  // ================= START FUNCTION CRUD ================

  public function update($id)
  {

    // get data from formulir

    $kelas = $this->input->post('kelas', true);
    $nama_jurusan = $this->input->post('nama_jurusan', true);
    $singkatan_jurusan = $this->input->post('singkatan_jurusan', true);
    $nama_kelas = $this->input->post('nama_kelas', true);

    $data = [
      'kelas' => $kelas,
      'nama_jurusan' => $nama_jurusan,
      'singkatan_jurusan' => $singkatan_jurusan,
      'nama_kelas' => $nama_kelas
    ];


    $this->db->where('id_kelas', $id);
    $this->db->update($this->_kelas, $data);

    $this->session->set_flashdata('kelas_message', ' <div class="alert alert-success" id="notification" role="alert">
       Data Kelas Berhasil Di Update!
       </div>');
    redirect('kelas');
  }

  function insertDataKelas()
  {

    $kelas = $this->input->post('kelas', true);
    $nama_jurusan = $this->input->post('nama_jurusan', true);
    $singkatan_jurusan = $this->input->post('singkatan_jurusan', true);
    $nama_kelas = $this->input->post('nama_kelas', true);

    $data = [
      'kelas' => $kelas,
      'nama_jurusan' => $nama_jurusan,
      'singkatan_jurusan' => $singkatan_jurusan,
      'nama_kelas' => $nama_kelas
    ];


    $this->db->insert('kelas', $data);
    $this->session->set_flashdata('kelas_message', ' <div class="alert alert-success" id="notification" role="alert">
    Data Kelas Berhasil Di Tambah!
    </div>');

 redirect('kelas');

  }



  // ================= END FUNCTION CRUD ================
}
