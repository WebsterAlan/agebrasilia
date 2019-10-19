
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function index(){
          $this->load->view('carrinho');
          }
  /* public function efetuarLogin($email,$password){

        $this->load->model('loginmodel');
        $result = $this->loginmodel->userConsult($email,$password);

            if($result == true){
                 $newUser  =  array (
                      'Email'   =>  $email ,
                      'Password' =>  $password,
                      'log_in'  =>  $result
              );

        $this->load->library('session');
        $this->session->set_userdata($newUser);
        //$this->session
      }else{
        //Apresentar mensagem de erro
      }
    }*/
  }
