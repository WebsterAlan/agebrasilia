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

<<<<<<< HEAD
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
=======
              
>>>>>>> 149795313b7e69aabc12ce7b594dbdebe430865a
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
            <figure style="margin-top:35px" class="image-box"><img src="http://agebrasilia.com.br/site/up-img/1b303340210635ccd2954c2d172d2c97.jpg"></figure>
                        </div>
                        <div class=" col-md-8 col-sm-7 col-xs-12">
                            <div class="details-header">
                               <span class="txt"><b class="h1">'.$product["nome_produto"].' </b> <b class="h5">('.$product["peso"].')</b></span>
                               <div style="color:#f5b062" class="h4">'.$product["valor"].'</div>
                                
                            </div>
                            
 <div class="text">'.$product["descricao"].'</div>
                            
                          


                            <div class="clearfix">
                                <div class="item-quantity"><div class="quantity-spinner"><button type="button" class="minus"><span class="fa fa-minus"></span></button><input type="text" name="product" value="1" class="prod_qty"><button type="button" class="plus"><span class="fa fa-plus"></span></button></div></div>
                                <button type="button" class="theme-btn btn-style-one add-to-cart">Adcionar no Carrinho<span class="icon fa fa-shopping-cart"></span></button><div class="item-price"></div>
                            </div>
                            
                        </div>
                    </div>
                </div>                       
            </div>
        </section>'


                ; ?>
                <?php }?>
<!-----------------------FIM PRODUTO------------------------------>
.$product["valor"].


<!-----------------------FIM PRODUTO------------------------------>

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

 <div class="text">Descrição do PRoduto informações completas do produto exmplo de texto</div>




                            <div class="clearfix">
                                <div class="item-quantity"><div class="quantity-spinner"><button type="button" class="minus"><span class="fa fa-minus"></span></button><input type="text" name="product" value="1" class="prod_qty"><button type="button" class="plus"><span class="fa fa-plus"></span></button></div></div>
                                <button type="button" class="theme-btn btn-style-one add-to-cart">Adcionar no Carrinho<span class="icon fa fa-shopping-cart"></span></button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
                </div>
                <!-------------------Fim MODAL---->

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
