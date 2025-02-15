<?php include "application/templates/header.php"?>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.modally.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.modally.js"></script>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <?php include "application/templates/menu.php"?>
    <!-- / Hidden Bar -->
<?php
  $listProdCarrinho;
 ?>

    <!--Page Title-->
    <section class="page-title" style="background-image:url(<?php echo base_url();?>images/background/bg-page-title-1.jpg);">
        <div class="auto-container">
            <h1>Seu carrinho</h1>
        </div>
    </section>


    <!--Cart Section-->
    <section class="cart-section">
        <div class="auto-container">

            <!--Cart Outer-->
            <div class="cart-outer">
                <div class="table-outer">
                    <table class="cart-table">
                        <thead class="cart-header">
                            <tr>
                            	<th class="prod-column">PRODUTO</th>
                                <th>&nbsp;</th>
                                <th class="price">Preço</th>
                                <th>QUANTIDADE</th>
                                <th>Total</th>
                                <th><span class="fa fa-trash-o"></span></th>

                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td colspan="2" class="prod-column">
                                    <div class="column-box">
                                        <figure class="prod-thumb"><a href="#"><img src="<?php echo base_url();?>images/resource/products/image-12.jpg" alt=""></a></figure>
                                        <div class="prod-title">Nome do Produto</div>
                                       </div>
                                </td>
                                <td class="price">R$ 15.00</td>
                                <td class="qty"><div class="quantity-spinner"><button type="button" class="minus"><span class="fa fa-minus"></span></button><input type="text" name="product" value="2" class="prod_qty" /><button type="button" class="plus"><span class="fa fa-plus"></span></button></div></td>
                                <td class="sub-total">R$15.00</td>
                                <td class="remove"><a href="#" class="remove-btn"><span class="fa fa-remove"></span></a></td>

                            </tr>

                        </tbody>
                    </table>
                </div>



                    <div class="pull-right"><br>
                        <button type="button" class="theme-btn btn-style-one">Atualizar</button>
                    </div>

                </div>

                <div class="row clearfix">

                    <div class="column pull-right col-md-4 col-sm-8 col-xs-12"><br>
                        <div class="normal-title"><h3>Total</h3></div>

                        <!--Totals Table-->
                        <ul class="totals-table">
                            <li class="clearfix"><span class="col">Sub Total</span><span class="col">R$ 15,00</span></li>
                            <li class="clearfix total"><span class="col">Total</span><span class="col">R$ 15,00</span></li>
                        </ul>

                        <div class=""><button type="submit" class="theme-btn btn-style-two proceed-btn">Finalizar Pedido &ensp; <span class="fa fa-long-arrow-right"></span></button></div>
                    </div>

                </div>


            </div>

        </div>
    </section>


    <!--Main Footer / Footer Style One-->
    <?php include "application/templates/rodape.php"?>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>


<?php include"application/templates/footer.php"?>
</body>
</html>
