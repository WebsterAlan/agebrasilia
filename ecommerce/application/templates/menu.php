  <header class="main-header">

    	<div class="main-box">
        	<div class="auto-container">
            	<div class="outer-container clearfix">

                    <div class="logo-box">
                        <div class="logo"><a href="index.php"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt=""></a></div>
                    </div>


                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li><a href="<?php echo base_url(); ?>loja.php">LOJA</a></li>
                                    <li><a href="<?php echo base_url(); ?>index.php#pontos">PONTOS DE VENDA</a></li>

                                    <li><a href="<?php echo base_url(); ?>about-us.html">PRODUTORES</a></li>
                                    <li><a href="<?php echo base_url(); ?>age.php">AGE</a></li>
                                    <li><a href="<?php echo base_url(); ?>#contato">CONTATO</a></li>
                                    <li><a href="#login" target="_modal">LOGAR</a></li>
                                    <li><a href="#carrinho" target="_modal"><img src="<?php echo base_url(); ?>assets/images/carrinho.png" width="45"></a></li>

                                 </ul>
                            </div>
                        </nav>

                    </div>

                    <div class="nav-toggler">
                    <button class="hidden-bar-opener"><span class="icon fa fa-bars"></span></button>
                    </div>

            	</div>
            </div>
        </div>



    </header>
    <section style="z-index:1000" class="hidden-bar right-align">

        <div class="hidden-bar-closer">
            <button class="btn"><i class="fa fa-close"></i></button>
        </div>


        <div class="hidden-bar-wrapper">

            <!-- .logo -->
            <div class="logo text-center">
                <a href="index.php"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt=""></a>
            </div><!-- /.logo -->


            <div class="side-menu">

                <li><a  style="align-items: center;" href="#carrinho" target="_modal"><img src="<?php echo base_url(); ?>assets/images/carrinho.png" width="45"></a></li>

                <ul class="navigation">

                                     <li><a href="loja.php">LOJA</a></li>
                                    <li><a href="index.php#pontos">PONTOS DE VENDA</a></li>

                                    <li><a href="about-us.html">PRODUTORES</a></li>
                                    <li><a href="age.php">AGE</a></li>
                                    <li><a href="#contato">CONTATO</a></li>
                                    <li><a href="#login" target="_modal">LOGAR</a></li>
                                 </ul>
            </div><!-- /.Side-menu -->

            <div class="social-icons">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>

        </div>
    </section>


    <!--------------------------------MODAL LOGIN------------------------------------------>
        <div style="z-index:5000" id="login">
        <section class="product-details">


        <form class="auto-container text-center" action="index.php/login/efetuarLogin" method="post">

        <img class="mb-4" src="http://agebrasilia.com.br/site/images/logo.png" alt="" width="152">


      <input style="font-size: 20px; height: 35px" type="email" id="inputEmail" name="email" class="form-control text" placeholder="Email" required autofocus><br>

      <input style="font-size:20px; height: 35px" type="password" id="inputPassword" name="password" class="form-control" placeholder="Senha" required><br>

      <button style="font-size: 20px" class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 1992-2019</p>
    </form>


            </section>

        </div>

<!------------------FIM MODAL LOGIN------------------------------------------>



    <!--------------------------------MODAL CARRINHO------------------------------------------>

    <div style="z-index:5000" id="carrinho">
         <div class="h5" style="display: block; margin-left: auto; margin-right: auto; width: 50%; margin-top:-20px"><img src="https://img.icons8.com/officel/32/000000/shopping-cart.png" >  CARRINHO DE COMPRA</div>
        <section class="product-details">

        <table class="table">
  <tbody>
    <?php foreach ($listProdCarrinho as $productCarrinho){ ?>
  <?php  echo'
    <tr>
      <th scope="row"><img src="http://agebrasilia.com.br/site/up-img/'.$productCarrinho["nome_imagem"].'" width="55"></th>
      <td style="vertical-align: middle; display: table-cell; font-size: 14px;">'.$productCarrinho["nome"].'</td>
      <td style="vertical-align: middle; display: table-cell; font-size: 14px">'.$productCarrinho["qnt"].'</td>
      <td style="vertical-align: middle; display: table-cell"><img src="https://img.icons8.com/cotton/15/000000/delete.png"></td>
    </tr>';
?>

<?php }?>
  </tbody>
</table>
            </section>

        </div>



<!------------------FIM MODAL CARRINHO------------------------------------------>
