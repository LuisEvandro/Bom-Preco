<div class="container">
    <div class="row" id="item-cliente-editar">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="txtTituloCadastros">
                <p>Editar Cliente</p>
            </div>

            <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Atenção !</strong> Sempre confira os dados antes de salvar !
            </div>

            <form name="frmEditCliente" id="frmEditCliente" method="post">
                <div class="row border-form-cad">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="row">
                            <!-- ID hidden -->
                            <input type="hidden" id="numCodeHidden" name="numCodeHidden" value="<?php echo $_SESSION["codigo"] ?>" readonly/>
                            
                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblCPF">CPF </label>
                                <input type="text" name="NumCPFClienteEdt" id="NumCPFClienteEdt" value="<?php echo $_SESSION["cpf"] ?>" title="Esse campo não pode ser editado" class="form-control MyForms cpf" required readonly placeholder="CPF">
                            </div>

                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblSenha">Senha <span class="text-danger" style="font-size:11px;">*somente se quiser realizar alterção de senha</span></label>
                                <input type="password" name="PassTextEdt" id="PassTextEdt" class="form-control MyForms" placeholder="Senha">
                            </div>

                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblNomeCliente">Nome </label>
                                <input type="text" name="NomeClienteEdt" id="NomeClienteEdt" value="<?php echo $_SESSION["nome"] ?>" class="form-control MyForms" required placeholder="Nome">
                            </div>

                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblEmail">E-mail </label>
                                <input type="email" name="EmailClienteEdt" id="EmailClienteEdt" value="<?php echo $_SESSION["email"] ?>" class="form-control MyForms" required placeholder="e-mail">
                            </div>

                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblTelefoneCliente">Telefone </label>
                                <input type="text" name="TelefoneClienteEdt" id="TelefoneClienteEdt" value="<?php echo $_SESSION["telefone"] ?>" class="form-control MyForms tel" required placeholder="Telefone">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblNumCep">CEP </label>
                                <input type="text" name="NumCepClienteEdt" id="NumCepClienteEdt" value="<?php echo $_SESSION["cep"] ?>" class="form-control MyForms cep cepMask" required placeholder="CEP">
                            </div>

                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblRuaCliente">Rua </label>
                                <input type="text" name="RuaClienteEdt" id="RuaClienteEdt" value="<?php echo $_SESSION["rua"] ?>" class="form-control MyForms rua" required placeholder="Rua">
                            </div>

                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblBairroCliente">Bairro </label>
                                <input type="text" name="BairroClienteEdt" id="BairroClienteEdt" value="<?php echo $_SESSION["bairro"] ?>" class="form-control MyForms bairro" required placeholder="Bairro">
                            </div>

                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblEstadoCliente">Estado </label>
                                <input type="text" name="select_estadoClienteEdt" id="select_estadoClienteEdt" value="<?php echo $_SESSION["estado"] ?>" class="form-control MyForms uf" required placeholder="Estado"/>
                            </div>

                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblNomeCidadeCliente">Cidade </label>
                                <input type="text" name="select_cidadeClienteEdt" id="select_cidadeClienteEdt" value="<?php echo $_SESSION["cidade"] ?>" class="form-control MyForms cidade" required placeholder="Cidade"/>
                            </div>

                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblNumero">Número </label>
                                <input type="text" name="NumCasaClienteEdt" id="NumCasaClienteEdt" value="<?php echo $_SESSION["numeroCasa"] ?>" class="form-control MyForms" placeholder="Número">
                            </div>
                            <!-- Deixar o botão disable se não ter um user selecionado para editar !! -->
                            <div class="col-sm-10 col-md-10" style="margin-top:15px;">
                                <button type="button" id="BtnSalvarEditCliente" class="btn btn-success btn-lg">
                                    Salvar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>