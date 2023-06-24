<?php

class Siswa_model extends CI_Model
{

    private $_siswa = 'siswa';

    public function getAllSiswa()
    {
        return $this->db->query("SELECT * FROM siswa, kelas WHERE siswa.id_kelas = kelas.id_kelas")->result_array();
    }
    public function getSiswaById($id)
    {

        return $this->db->query("SELECT * FROM siswa, kelas WHERE siswa.id_kelas = kelas.id_kelas AND nisn = '$id'")->row_array();
    }

    public function update($id)
    {


        $id_kelas = $this->input->post('kelas', true);
        $nama = $this->input->post('nama', true);
        $tetala = $this->input->post('tetala', true);
        $jenis_kelamin = $this->input->post('jenis_kelamin', true);
        $alamat = $this->input->post('alamat', true);
        $agama = $this->input->post('agama', true);
        $golongan_darah = $this->input->post('golongan_darah', true);
        $no_telp_wali_murid = $this->input->post('no_telp_wali_murid', true);

        $data = [
            'id_kelas' => $id_kelas,
            'nama' => $nama,
            'tetala' => $tetala,
            'jenis_kelamin' => $jenis_kelamin,
            'alamat' => $alamat,
            'agama' => $agama,
            'golongan_darah' => $golongan_darah,
            'no_telp_wali_murid' => $no_telp_wali_murid
        ];

        $this->db->where('nisn', $id);
        $this->db->update($this->_siswa, $data);

        $this->session->set_flashdata('siswa_message', ' <div class="alert alert-success" id="notification" role="alert">
       Data siswa Berhasil Di Update!
       </div>');
        redirect('siswa');
    }
}
