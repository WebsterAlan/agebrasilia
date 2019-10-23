
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loja extends CI_Controller{

  public function listAllProducts(){

    $this->load->model('product_model');
    $result = $this->product_model->listarTodosProdutos();
    $this->load->view('loja');
  }

  public function addProdutoCarrinho($codProduto,$idSession){

      $this->load->model('product_model');
      $this->product_model->addProductCarrinho($codProduto, $idSession);
      $data['listProdCarrinho'] = $this->product_model->listarProdutosCarrinho();
      $this->load->view('carrinho',$data);

     }

  }
