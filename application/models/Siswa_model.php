<?php

class Siswa_model extends CI_Model
{

    private $_siswa = 'siswa';

    public function getAllSiswa()
    {
        return $this->db->query("SELECT * FROM siswa, kelas WHERE siswa.id_kelas = kelas.id_kelas")->result_array();
    }
}
