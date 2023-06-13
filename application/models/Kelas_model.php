<?php

class Kelas_model extends CI_Model
{

  private $_kelas = 'kelas';

  public function getAllKelas()
  {


    return $this->db->get($this->_kelas)->result_array();
  }

  public function hapusDataKelas($id)
  {
    $this->db->where('id_kelas', $id);
    $this->db->delete('kelas');
  }
}
