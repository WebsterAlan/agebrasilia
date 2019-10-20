<?php
/*function logged() {
    $ci = & get_instance();//Instância do CodeIgniter
    $method = $ci->router->fetch_class().'/'.$ci->router->fetch_method();//controller/method atual

    $protegidos = ['controller/method'];//controller/method protegidos


    $usuario_logado = $ci->session->userdata('usuario_logado');//Array gerado pelo seu algotitmo de "login" e gravado na SESSION
       if (in_array($method, $protegidos)) {//Verificando se o método é protegido
        if (!$usuario_logado[username]) {//Verificando se o usuário está logado
            $ci->session->set_flashdata('alert', 'Autentique-se, por favor!');//Aqui vc tb pode criar um aviso pro usuário saber o motivo do comportamento da aplicação
            $url = base_url('controller/metodo_de_logon');
            redirect($url);//usuário não logado direciona para a pagina de login
        }
    }
} */
 ?>
