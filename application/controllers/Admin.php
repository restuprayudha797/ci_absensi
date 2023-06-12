<?php

class Admin extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');

    //* load helper clogin
    check_login();
  }

  public function index()
  {
    $data['title'] = 'Dashboard';

    // set data
     $data['user'] = $this->db->get_where('users', ['id_user' => $this->session->userdata('id_user')])->row_array();

     $this->load->view('backend/template/header', $data);
     $this->load->view('backend/template/navbar');
     $this->load->view('backend/admin/index');
     $this->load->view('backend/template/footer');
   





  }
}
