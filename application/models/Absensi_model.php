<?php

class Absensi_model extends CI_Model
{


    public function getAllAbsensi()
    {


        $waktu =  date('Y-m-d');
        $waktuExplode = explode('-', $waktu);

        $tahun = $waktuExplode[0];
        $bulan = $waktuExplode[1];
        $tanggal = $waktuExplode[2];

        return $this->db->query("SELECT * FROM absen, siswa, kelas WHERE absen.nisn = siswa.nisn AND siswa.id_kelas = kelas.id_kelas AND absen.tanggal = '$tanggal' AND absen.bulan = '$bulan' AND absen.tahun = '$tahun' ")->result_array();
    }

    public function getWhereAbsensiBasedOnClassTeacher($id_kelas)
    {


        $waktu =  date('Y-m-d');
        $waktuExplode = explode('-', $waktu);

        $tahun = $waktuExplode[0];
        $bulan = $waktuExplode[1];
        $tanggal = $waktuExplode[2];

        return $this->db->query("SELECT * FROM absen, siswa, kelas WHERE absen.nisn = siswa.nisn AND siswa.id_kelas = kelas.id_kelas AND kelas.id_kelas = $id_kelas AND absen.tanggal = '$tanggal' AND absen.bulan = '$bulan' AND absen.tahun = '$tahun' ORDER BY absen.status = DESC")->result_array();

        
    }

    public function insertIzinSiswa(){

        $nisn = $this->input->post('exampleDataList', true);
        $status = $this->input->post('status', true);
        $keterangan = $this->input->post('keterangan', true);
        $waktu =  date('Y-m-d');
        $waktuExplode = explode('-', $waktu);

        $tahun = $waktuExplode[0];
        $bulan = $waktuExplode[1];
        $tanggal = $waktuExplode[2];

        $data = [


            'nisn' => $nisn,
            'tanggal' => $tanggal,
            'bulan' => $bulan,
            'tahun' => $tahun,
            'status' => $status,
            'keterangan' => $keterangan,

        ];

        $this->db->insert('absen', $data);
        redirect('beranda');
       



    }
}
