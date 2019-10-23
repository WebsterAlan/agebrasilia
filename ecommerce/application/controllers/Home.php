<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{


    function __construct() {
            parent::__construct();
            $this->load->library('session');
            $this->load->model('product_model');
        }

    public function index(){

      $object = $this->product_model->listarTodosProdutos();
      $data['products'] = $object;
      $data['session_id'] = $this->session->session_id;
      $data['listProdCarrinho'] = $this->product_model->listarProdutosCarrinho();
      $this->load->view('loja',$data);
    }
}
 ?>
