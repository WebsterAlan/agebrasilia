<html lang="en">
  <head>
    <style type="text/css">html,
body {
  height: 100%;
}
.logar {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.logar .checkbox {
  font-weight: 400;
}
.logar .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.logar .form-control:focus {
  z-index: 2;
}
.logar input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.logar input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}</style>
<?php include  "include/header.php"?>

    <title>Logar na Loja Age Braília</title>
    
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="logar">
      <img class="mb-4" src="http://agebrasilia.com.br/site/images/logo.png" alt="" width="152">
      <h1 class="h3 mb-3 font-weight-normal">Logar na Loja</h1>
    
      <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
     
      <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Lembre-me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 1992-2019</p>
    </form>
  </body>
</html>