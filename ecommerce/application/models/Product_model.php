<?php

class Product_model extends CI_Model{


 public function listarTodosProdutos(){

   $query = $this->db->get('produto');
   $object = $query->result();
   return json_decode(json_encode($object), true);
   //var_dump($result[0]->{'id'});
 }

 public function listarProdutoID(){




  }




}
 ?>
