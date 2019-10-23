
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  function __construct() {
          parent::__construct();
          $this->load->model('login_model');
          $this->load->model('product_model');
          $this->load->library('session');
      }

   public function efetuarLogin(){

          $email = $_POST['email'];
          $password = $_POST['password'];

          //$result = $this->loginmodel->userConsult($email,$password);

          $newuser  =  array (
               'Email'   =>  $email ,
               'Password' =>  $password,
               'log_in'  =>  'Logado'
          );

          $this->session->set_userdata($newuser);

          $object = $this->product_model->listarTodosProdutos();
          $data['products'] = $object;
          $data['session_id'] = $this->session->session_id;
          $this->load->view('loja',$data);
          //$value = $this->session->userdata('Email');
          //$value = $this->session->session_id;
          //var_dump($value);


        /*    if($result == true){
                 $newUser  =  array (
                      'Email'   =>  $email ,
                      'Password' =>  $password,
                      'log_in'  =>  'Logado'
              );

        $this->load->library('session');
        $this->session->set_userdata($newUser);
        $this->load->view('loja');
      }else{
        //Apresentar mensagem de erro
      } */


    }
  }
