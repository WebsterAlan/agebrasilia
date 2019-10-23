<?php include "application/templates/header.php" ?>

<link rel="stylesheet" href="assets/css/jquery.modally.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.modally.js"></script>
<body>
<div class="page-wrapper">
<div class="preloader"></div>
<?php include "application/templates/menu.php" ?>
<section class="page-title" style="background-image:url(assets/images/background/bg-page-title-1.jpg);">
        <div class="auto-container">
            <h1>Produtos</h1>
        </div>
    </section>

    <section class="shop-section">
    	<div class="auto-container">

<!----------------------------MODAL PRODUTO-------------------------------------->

                <div style="font-size:14px" id="produto">
   <section class="product-details">
            <div class="auto-container">
                <div class="basic-details">
                    <div class="row clearfix">
                        <div class="image-column col-md-4 col-sm-5 col-xs-12">
                            <figure class="image-box"><a href="assets/images/resource/products/image-12.jpg" class="lightbox-image" title="Image Caption Here"><img src="images/resource/products/image-12.jpg" alt=""></a></figure>
                        </div>
                        <div class="info-column col-md-8 col-sm-7 col-xs-12">
                            <div class="details-header">
                                <h4>Nome do Produto</h4>
                                <div class="item-price">R$ 124,00</div>
                            </div>

 <div class="text">Descrição do Produto informações completas do produto exmplo de texto</div>




                            <div class="clearfix">
                                <div class="item-quantity"><div class="quantity-spinner"><button type="button" class="minus"><span class="fa fa-minus"></span></button><input type="text" name="product" value="1" class="prod_qty"><button type="button" class="plus"><span class="fa fa-plus"></span></button></div></div>
                                <button type="button" class="theme-btn btn-style-one add-to-cart">Adicionar no Carrinho<span class="icon fa fa-shopping-cart"></span></button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
                </div>
<!-------------------------FIM MODAL  PRODUTO----------------------------------->


         <!-----------------------FORMULARIO DE BUSCA--------------------------------------->
         <div class="row justify-content-center">
                        <div  style="width:70%">
                            <form  style="border-bottom: solid #28a745 2px;" class="card-sm">
                                <div class="  card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </div>
                                    <div class="col">
                                        <input style="font-size:18px;" class="form-control  form-control-lg form-control-borderless" type="search" placeholder="Pesquisar">
                                    </div>
                                    <div class="col-auto">
                                        <button style="font-size:18px" class=" btn-lg btn-success" type="submit">Buscar</button>
                                    </div>
                                 </div>
                            </form>
                        </div>

                    </div>
            <!------------------------------------------------------------>
            <br><br>

            <div  class="row clearfix">



                <!----------------Inicio Produto------------>
                <?php foreach ($products as $product){ ?>
                  <?php
                  echo ' <div class="default-shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div style="border:0" style class="inner-box">



                        <a href="#produto" target="_modal">
                          <img src="http://agebrasilia.com.br/site/up-img/48f74b4088c7f7c06441bf19918ff7e3.jpg" alt="">
                        </a>


                      <div class="lower-content">
                          <h3><a href="shop-single.html">'.$product["nome_produto"].'</a>  <spam>('.$product["peso"].')</spam></h3>
                          <div class="price"><span class="price-txt">'.$product["valor"].'</span></div>
                      </div>

                      <!--Overlay Box-->
                      <div class="overlay-box">
                          <div class="prod-options">

                              <a href="shop-single.html" class=" add-cart-btn">Comprar<span class="fa fa-shopping-cart"></span></a>

                          </div>
                      </div>

                  </div>
                </div>'; ?>
                <?php }?>
                <!-------------------Fim produto---->

            </div>

            <!-- Paginação -->
            <div class="styled-pagination text-center">
                <ul>
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a class="next" href="#">Proximo</a></li>
                </ul>
            </div>

        </div>
    </section>


    <!--RODAPE-->
<?php include "application/templates/rodape.php" ?>
</div>
<!--Scroll para topo-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>
<?php include "application/templates/footer.php" ?>



</body>
</html>
