<section id="cart-and-list-product">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-sm-12 text-center">
                        <h3 class="txt-action-cliente">Produtos</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-12 col-sm-12 text-center list-clear">
                        <div id="list-prod">
                            <!-- Prod List -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-sm-6 col-xs-12 bg-cart">
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-sm-12 text-center">
                        <h3 class="txt-action-cliente">Carrinho</h3>
                    </div>
                </div>
                <div class="row dados-cart-topo">
                    <div class="col-xs-6 col-md-6 col-sm-6 text-center txt-valorTotal-cart">
                        <p>Total : R$ <span id="id-valor-total-compra"><span></p>
                    </div>

                    <div class="col-xs-6 col-md-6 col-sm-6">
                        <buttom type="button" class="btn btn-success btn-md" id="btn-finalizar-compra" style="width:100%;">
                            Finalizar compra
                        </buttom>
                    </div>
                </div>
                <div class="row" style="padding-top:25px">
                    <div class="col-xs-12 col-md-12 col-sm-12 text-center">
                        <input type="hidden" name="idCliente" id="idCliente" value = "<?php echo $_SESSION["codigo"] ?>" />
                        <div class="row" id="list-cart">
                            <!-- Cart List -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>