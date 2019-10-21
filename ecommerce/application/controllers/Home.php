<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

    public function index(){
      $this->load->model('product_model');
      $object = $this->product_model->listarTodosProdutos();
      //var_dump($object);
      //die();
      $data['products'] = $object;
      $this->load->view('loja',$data);
    }
}
 ?>
