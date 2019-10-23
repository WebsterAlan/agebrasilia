<?php include "application/templates/header.php" ?>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.modally.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.modally.js"></script>
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

            <div  class="row">



                <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-half-empty"></span> <span class="txt">(Customer Review)</span> </div>


                <!----------------Inicio Produto------------>
                <?php foreach ($products as $product){ ?>
                  <?php
                  echo '<section class="product-details">
            <div class="container">
                <div class="basic-details">
                    <div class="row clearfix">
                        <div class="image-column col-md-4 col-sm-5 col-xs-12">
            <figure style="margin-top:35px" class="image-box"><img src="http://agebrasilia.com.br/site/up-img/'.$product["nome_imagem"].'"></figure>
                        </div>
                        <div class=" col-md-8 col-sm-7 col-xs-12">
                            <div class="details-header">
                               <span class="txt"><b class="h1">'.$product["nome_produto"].' </b> <b class="h5">('.$product["peso"].')</b></span>
                               <div style="color:#f5b062" class="h4">'.$product["valor"].'</div>

                            </div>

             <div class="text">'.$product["descricao"].'</div>




                            <div class="clearfix">
                                <div class="item-quantity"><div class="quantity-spinner"><button type="button" class="minus"><span class="fa fa-minus"></span></button><input type="text" name="product" value="1" class="prod_qty"><button type="button" class="plus"><span class="fa fa-plus"></span></button></div></div>
                              <a href="index.php/loja/addProdutoCarrinho/'.$product["id"].'/'.$session_id.'">  <button type="button"class="theme-btn btn-style-one add-to-cart">Adcionar no Carrinho<span class="icon fa fa-shopping-cart"></span></button> </a><div class="item-price"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>'


                ; ?>
                <?php }?>
<!-----------------------FIM PRODUTO------------------------------>



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
