<?php

class LoginModel extends CIModel{


  public function userConsult($email,$password){

     $query = $this->db->get('SELECT * FROM tb_user WHERE tb_user.email ='+$email+'AND tb_user.password ='+$password);
     return $query->result();
  }




}

 ?>
