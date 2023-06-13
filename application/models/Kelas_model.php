<?php

class Kelas_model extends CI_Model
{

  private $_kelas = 'kelas';

  public function getAllKelas()
  {


    return $this->db->get($this->_kelas)->result_array();
  }

}
