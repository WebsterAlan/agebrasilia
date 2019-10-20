<?php

class Login_model extends CI_Model{


  public function userConsult(){

    $query = $this->db->get('form_produto', 10);
    $result = $query->result();
     var_dump($result);

  }




}

 ?>
