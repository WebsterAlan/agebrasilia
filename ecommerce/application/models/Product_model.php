<?php

class Product_model extends CI_Model{


 public function listarTodosProdutos(){

   $value = $this->db->get('tb_produto');
   $object = $value->result();
   return json_decode(json_encode($object), true);
   //var_dump($result[0]->{'id'});
 }

 public function listarProdutoCod($codProduto){

   $limit = 10;
   $offset = false;
   $query = $this->db->get_where('tb_produto', array('id' => $codProduto), $limit, $offset)->row();;
   return $query;
 }

 public function addProductCarrinho($codProduto,$idSession){

  $tbProduto = $this->listarProdutoCod($codProduto);
  $nome = $tbProduto->nome_produto;
  $preco =  $tbProduto->valor;
  $nome_imagem = $tbProduto->nome_imagem;

   $data = array(
        'cod' => $codProduto,
        'nome' => $nome,
        'preco' => $preco,
        'qnt'   => '12',
        'sessao' => $idSession,
        'nome_imagem' => $nome_imagem
    );

   $this->db->insert('tb_carrinho', $data);
  }

public function listarProdutosCarrinho($idSession){
  $this->db->where('sessao',$idSession);
  $value = $this->db->get('tb_carrinho');

  $object = $value->result();
  return json_decode(json_encode($object), true);
}


}
 ?>
