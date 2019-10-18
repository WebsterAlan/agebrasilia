
<?php

class Login extends CI_Controller{

    LoginModel $loginModel;

   public function efetuarLogin($nome,$email){

        boolean $value  = $loginModel->userConsult($nome,$email);



   }


}
