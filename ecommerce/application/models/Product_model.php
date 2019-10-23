<?php

class Product_model extends CI_Model{


 public function listarTodosProdutos(){

   $value = $this->db->get('tb_produto');
   $object = $value->result();
   $this->listarProdutosCarrinho();
   return json_decode(json_encode($object), true);
   //var_dump($result[0]->{'id'});
 }

 public function listarProdutoCod($codProduto){

   $limit = 10;
   $offset = false;
   $query = $this->db->get_where('tb_produto', array('id' => $codProduto), $limit, $offset);
   //var_dump($query->result());
 }

 public function addProductCarrinho(){
   //$codProduto,$idSession,$nome,$preco,$qnt
   //Adiciona a tb_carrinho o cod do produto,id session,nome,preco e qnt

   $data = array(
        'cod' => '12345',
        'nome' => 'testeNome',
        'preco' => 10.2,
        'qnt'   => '12',
        'sessao' => '01023'
    );

   $this->db->insert('tb_carrinho', $data);
  }

public function listarProdutosCarrinho(){

  $this->db->select('cod');
  $this->db->where('sessao = 01023');
  $result = $this->db->get('tb_carrinho')->row();
  $codProduto = $result->cod;

  $limit = 2;
  $offset = false;
  $query = $this->db->get_where('tb_produto', array('id' => $codProduto), $limit, $offset);

  //listar todos tb_carrinho com id_session e retornar os cod do produto
  //listar array de tb_produto de acordo com cada cod de produto
  //retorno do array objeto
}


}
 ?>
