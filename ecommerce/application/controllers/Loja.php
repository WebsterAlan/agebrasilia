
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loja extends CI_Controller{

  public function listAllProducts(){

    $this->load->model('product_model');
  //  $data['page_title'] = 'Your title';

/*  $data = array(
        'title' => 'My Title',
        'heading' => 'My Heading',
        'message' => 'My Message'
);

$this->load->view('blogview', $data);


$data = new Someclass();
$this->load->view('blogview', $data);*/

    $result = $this->product_model->listarTodosProdutos();


    $this->load->view('loja');


  }





  }
