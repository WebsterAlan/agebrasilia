
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loja extends CI_Controller{


  function __construct() {

          parent::__construct();
          $this->load->model('product_model');
          $this->load->library('session');
      }

  public function listAllProducts(){

    $this->load->model('product_model');
    $result = $this->product_model->listarTodosProdutos();
    $this->load->view('loja');
  }

  public function addProdutoCarrinho($codProduto,$idSession){

      $this->load->model('product_model');
      $this->product_model->addProductCarrinho($codProduto, $idSession);
      $object = $this->product_model->listarTodosProdutos();
      $data['session_id'] = $this->session->session_id;
      var_dump($data['session_id']);
      $data['products'] = $object;
      $data['listProdCarrinho'] = $this->product_model->listarProdutosCarrinho($data['session_id']);
      $this->load->view('loja',$data);

     }

  }
