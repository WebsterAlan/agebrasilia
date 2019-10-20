<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

    public function index(){
      $this->load->model('login_model');
      $this->login_model->userConsult();
      $this->load->view('loja');
    }
}
 ?>
