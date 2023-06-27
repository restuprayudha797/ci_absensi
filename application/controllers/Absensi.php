<?php


class absensi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load model
        $this->load->model('Absensi_model', 'ab');
        

        // end load model


        //* load helper clogin
        check_login();
    }


    public function index()
    {

        // siapkan data untuk ditampilkan
        $data['title'] = 'Data Absensi';
        $data['user'] = $this->db->get_where('users', ['id_user' => $this->session->userdata('id_user')])->row_array();

        if ($data['user']['role_id'] == 1 || $data['user']['role_id'] == 2) {

            $data['absensi'] = $this->ab->getAllAbsensi();

        }elseif($data['user']['role_id'] == 3){

            $data['absen'] = $this->db->get_where('guru', ['nktam' => $data['user']['nktam']])->row_array();
            $id_kelas = $data['absen']['id_kelas'];

            $data['absensi'] = $this->ab->getWhereAbsensiBasedOnClassTeacher($id_kelas);


            


          

        }
        $this->load->view('backend/template/header', $data);
        $this->load->view('backend/template/navbar');
        $this->load->view('backend/admin-absensi/absensi/index');
        $this->load->view('backend/template/footer');
    }
}
