<?php include "include/header.php"?>
<link rel="stylesheet" href="jquery.modally.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="jquery.modally.js"></script>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <?php include "include/menu.php"?>
    <!-- / Hidden Bar -->
    
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title-1.jpg);">
        <div class="auto-container">
            <h1>Finalizar Pedido</h1>
        </div>
    </section>
    
    
    <!--Checkout Page-->
    <div class="checkout-page">
        <div class="auto-container">

            <div class="row clearfix">
            	<div class="col-md-8 col-sm-12 col-xs-12">
                	<!--Default Links-->
                    
            
                    <!--Billing Details-->
                    <div class="billing-details">
                        <div class="shop-form">
                            <form method="post" action="checkout.html">

                                <div class="default-title"><h2>cadastro do Usuário</h2></div>

                                <div class="row clearfix">

                                    <!--Form Group-->
                                    <div class="form-group col-xs-12">
                                        <div class="field-label">Nome Completo <sup>*</sup></div>
                                        <input type="text" name="field-name" value="" placeholder="Qual seu  nome">
                                    </div>

                                    <!--Form Group-->
                                   

                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Email </div>
                                        <input type="text" name="field-name" value="" placeholder="nome@email.com">
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Telefone<sup>*</sup></div>
                                        <input type="email" name="field-name" value="" placeholder="61 3456-1234">
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">cpf<sup>*</sup></div>
                                        <input type="email" name="field-name" value="" placeholder="123.123.123-12">
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Crie uma senha <sup>*</sup></div>
                                        <input type="email" name="field-name" value="" placeholder="Senha do Usuário">
                                    </div>

                                    <!-----------------Onde entregar---------------------------->


                                    <div class="payment-options form-group col-md-6 col-sm-6 col-xs-12">

                                        <div class="field-label">Entrega</div>
                            <ul>
                                <li>
                                    <div class="radio-option">
                                        <input type="radio" name="payment-group" id="local" checked>

                                        <label for="payment-1"><strong>Retirar no Local</strong><span class="small-text">
                                        <select name="local">
                                            <option>303 Norte Quarta-Feira de 6:00 as 12:00 </option>
                                            <option>303 Norte Sábado de 6:00 as 12:00</option>
                                            <option>115 Sul  Quarta-Feira de 6:00 as 12:00</option>
                                            <option>115 Sul  Sábado de 6:00 as 12:00</option>
                                            <option>Quadra 16 Crruzeiro Novo Quarta-Feira  de 6:00 as 12:00</option>
                                        </select>
                                         </span></label>

                                    </div>


                                    

                                </li>
                               
                                
                            </ul>
                        </div>   


                        <!------------------------------------fim onde entregar------------------->

                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Observação para entrega</div>
                                        <textarea placeholder="Notificações do seu pedido ."></textarea>
                                    </div>                                

                                  

                                   

                                   

                                </div>
                            </form>

                        </div>

                    </div><!--End Billing Details-->
                </div>

                <div class="col-md-4 col-sm-12 col-xs-12">
                	<!--Your Order-->
                    <div class="your-order">
                        <div class="default-title"><h2>Seu pedido</h2></div>
                        <!--Orders Table-->
                        <ul class="orders-table">
                            <li class="table-header clearfix"><div class="col">Produto</div><div class="col">Total</div></li>
                            <li class="clearfix"><div class="col">Tomate</div><div class="col">R$ 19,00</div></li>
                            <li class="clearfix"><div class="col">Sub-Total</div><div class="col"> R$19,00</div></li>
                            <li class="clearfix"><div class="col">Taxa de Entrega</div><div class="col">Gratís</div></li>
                            <li class="total clearfix"><div class="col">Total </div><div class="col">R$ 19,00</div></li>
                        </ul>

                    </div><!--End Your Order-->


                    <!--Place Order-->
                    <div class="place-order">
                        <div class="default-title"><h2>Forma de pagamento</h2></div>

                        <!--Payment Options-->
                        <div class="payment-options">
                            <ul>
                                <li>
                                    <div class="radio-option">
                                        <input type="radio" name="payment-group" id="payment-1" checked>
                                        <label for="payment-1"><strong>Pagamento na Retirada</strong></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-option">
                                        <input type="radio" name="payment-group" id="payment-2">
                                        <label for="payment-2"><strong>Transferencia Bancaria</strong><span class="small-text">Faça seu pagamento diretamente em nossa conta bancária. Por favor, use o seu ID do pedido como referência de pagamento. Seu pedido não será enviado até que os fundos sejam liberados em nossa conta.</span></label>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>

                        <button type="button" class="theme-btn btn-style-two">Faça a encomenda</button>

                    </div><!--End Place Order-->
                </div>

            </div>

        </div>
    </div>
    
    
    <!--Main Footer / Footer Style One-->
    <?php include "include/rodape.php"?>
</div>

<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>


<?php include "include/footer.php"?>

</body>
</html>