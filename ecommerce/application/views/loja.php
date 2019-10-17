<?php include "include/header.php" ?>


<link rel="stylesheet" href="jquery.modally.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/inobounce/0.2.0/inobounce.min.js"></script>
<script type="text/javascript" src="jquery.modally.js"></script>

<body>
<div class="page-wrapper">
<div class="preloader"></div>

<?php include "include/menu.php" ?>
<section class="page-title" style="background-image:url(images/background/bg-page-title-1.jpg);">

<div class="auto-container">
<h1>Produtos</h1>

        </div>

    </section>

    

    

    <!--Shop Section-->

    <section class="shop-section">

    	<div class="auto-container">







<!------------------------Modal-------------------------------->

        

        <a href="#ipsum" target="_modal" style="margin-right: 6px;">uuuu!</a>

               

                <div style="font-size:14px" id="ipsum">

   <h1 class="modal-title">Carrinho</h1>

 <ul class="list-group">

  

  <li class="list-group-item d-flex justify-content-between align-items-center">

    <img style="max-width: 58px" src="images/resource/products/image-12.jpg">

    <span style="float: left; margin-left: -25%">Tomate Cereja</span>

    <span class="badge badge-primary badge-pill">7</span>

  </li>





  <li class="list-group-item d-flex justify-content-between align-items-center">

        

         <img style="max-width: 58px" src="images/resource/products/image-12.jpg">

         <span style="float: left; margin-left: -25%">Outro Produto</span>   



    <span class="badge badge-primary badge-pill">8</span>

  </li>

  <li class="list-group-item d-flex justify-content-between align-items-center">

     <img style="max-width: 58px" src="images/resource/products/image-12.jpg">

     <span style="float: left; margin-left: -25%">Mais um Produto</span>   

    <span class="badge badge-primary badge-pill">1</span>

  </li>

</ul>

                    <div class="button-wrap">

                       <!-- <a target="_modal:close" class="button small">Close me!</a>-->

                        <a href="#ipsum" target="_modal" class="button gradient small">Finalizar Pedido!</a>

                    </div>

                </div>













<!------------------------------------------------------------>





         <!-------------------------------------------------------------->                

         <div class="row justify-content-center">

                        <div  style="width:85%">

                            <form class="card card-sm">

                                <div class="card-body row no-gutters align-items-center">

                                    <div class="col-auto">

                                        <i class="glyphicon glyphicon-search"></i>

                                    </div>

                                    <div class="col">

                                        <input style="font-size:18px" class="form-control form-control-lg form-control-borderless" type="search" placeholder="Pesquisar">

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

            

            <div class="row clearfix">

            	

               

                

                <!----------------Inicio Produto------------>

                <div class="default-shop-item col-lg-3  col-sm-6 ">

                	<div class="inner-box">

                    	<div class="image-box">

                        	<figure class="image"><a href="shop-single.html"><img src="images/resource/products/image-12.jpg" alt=""></a></figure>

                        </div>

                        <div class="lower-content">

                            <h3><a href="shop-single.html">Tomate</a></h3>

                            <h5>600gr</h5>

                         

                            <div class="price"><span>R$ 16,00</span></div>

                        </div>

                        

                        <!--Overlay Box-->

                        <div class="overlay-box">

                        	<div class="prod-options">

                            	

                                <a href="shop-single.html" class="add-cart-btn">Comprar <span class="fa fa-shopping-cart"></span></a>

                                

                            </div>

                        </div>

                        

                    </div>

                </div>





                <?php





  for($i =1; $i < 10; $i++){

  echo '<div class="default-shop-item col-lg-3  col-sm-6 ">

                    <div class="inner-box">

                        <div class="image-box">

                            <figure class="image"><a href="shop-single.html"><img src="images/resource/products/image-12.jpg" alt=""></a></figure>

                        </div>

                        <div class="lower-content">

                            <h3><a href="shop-single.html">Tomate</a></h3>

                            <h5>600gr</h5>

                         

                            <div class="price"><span>R$ 16,00</span></div>

                        </div>

                        

                        <!--Overlay Box-->

                        <div class="overlay-box">

                            <div class="prod-options">

                                

                                <a href="shop-single.html" class="add-cart-btn">Comprar <span class="fa fa-shopping-cart"></span></a>

                                

                            </div>

                        </div>

                        

                    </div>

                </div>';

}









                ?>

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


   <?php include "include/rodape.php" ?>

</div>

<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/script.js"></script>



 <script type="text/javascript">

            jQuery(document).ready(function() {

                $('#ipsum').modally('ipsum', {max_width: 400});

                $('#lorem').modally();

                $('#dolor').modally();

                modally('video-modal', {video: true, max_width: 400});

            });

        </script>

        <script async defer src="https://buttons.github.io/buttons.js"></script>



</body>

</html>