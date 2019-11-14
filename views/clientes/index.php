<div class="container" style="margin-top: 50px; margin-bottom: 80px;">
    <div class="row" style="margin-bottom:35px;">
        <div class="panel panel-default painel-hover" style="background-color: rgba(255, 255, 255, 0.2);">
            <div class="panel-body">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="txt-action-cliente"><p>Ações para cliente</p></div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-center tt">
                    <ul class="list-group-clientes" id="group-itens-clientes">
                        <li>
                            <a href="javascript:void(0)" class="list-group-item btn-item-cliente-cadastro active">Cadastrar novo cliente</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="list-group-item btn-item-cliente-lista">Lista de clientes</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="list-group-item btn-item-cliente-alterar">Alterar clientes</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="item-cliente-cadastro">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="txtTituloCadastros">
                <p>Cadastro Cliente</p>
            </div>
            <form name="frmCadCliente" id="frmCadCliente" method="post">
                <div class="row border-form-cad">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblCPF">CPF </label>
                                <input type="text" name="NumCPFCliente" id="NumCPFCliente" class="form-control MyForms cpf" required placeholder="CPF">
                            </div>

                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblSenha">Senha </label>
                                <input type="password" name="PassText" id="PassText" class="form-control MyForms" required placeholder="Senha">
                            </div>

                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblNomeCliente">Nome </label>
                                <input type="text" name="NomeCliente" id="NomeCliente" class="form-control MyForms" required placeholder="Nome">
                            </div>

                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblEmail">E-mail </label>
                                <input type="email" name="EmailCliente" id="EmailCliente" class="form-control MyForms" required placeholder="e-mail">
                            </div>

                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblTelefoneCliente">Telefone </label>
                                <input type="text" name="TelefoneCliente" id="TelefoneCliente" class="form-control MyForms tel" required placeholder="Telefone">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblNumCep">CEP </label>
                                <input type="text" name="NumCepCliente" id="NumCepCliente" class="form-control MyForms cep cepMask" required placeholder="CEP">
                            </div>

                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblRuaCliente">Rua </label>
                                <input type="text" name="RuaCliente" id="RuaCliente" class="form-control MyForms rua" required placeholder="Rua">
                            </div>

                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblBairroCliente">Bairro </label>
                                <input type="text" name="BairroCliente" id="BairroCliente" class="form-control MyForms bairro" required placeholder="Bairro">
                            </div>

                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblEstadoCliente">Estado </label>
                                <input type="text" name="select_estadoCliente" id="select_estadoCliente" class="form-control MyForms uf" required placeholder="Estado"/>
                            </div>

                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblNomeCidadeCliente">Cidade </label>
                                <input type="text" name="select_cidadeCliente" id="select_cidadeCliente" class="form-control MyForms cidade" required placeholder="Cidade"/>
                            </div>

                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblNumero">Número </label>
                                <input type="text" name="NumCasaCliente" id="NumCasaCliente" class="form-control MyForms" placeholder="Número">
                            </div>

                            <div class="col-sm-10 col-md-10" style="margin-top:15px;">
                                <button type="button" id="BtnSalvarCliente" class="btn btn-success btn-lg">
                                    Adicionar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <div class="row" id="item-cliente-list" style="display:none;">
        <div class="col-md-12 col-xs-12 col-sm-12 text-center">
            <div class="txtTituloCadastros">
                <p>Lista de Cliente</p>
            </div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row border-form-cad">
                <table class="table table-hover" id="tab-cliente">
                    <thead>
                        <tr>
                            <th>CPF</th>
                            <th>Nome</th>
                            <th>Endereço</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody id="tab-cliente-list">

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row" id="item-cliente-editar" style="display:none;">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="txtTituloCadastros">
                <p>Editar Cliente</p>
            </div>
            <form name="frmEditCliente" id="frmEditCliente" method="post">
                <div class="row border-form-cad">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="row">
                            <!-- ID hidden -->
                            <input type="hidden" id="numCodeHidden" name="numCodeHidden" readonly/>
                            
                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblCPF">CPF </label>
                                <input type="text" name="NumCPFClienteEdt" id="NumCPFClienteEdt" class="form-control MyForms cpf" required placeholder="CPF">
                            </div>

                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblSenha">Senha <span class="text-danger" style="font-size:11px;">*somente se quiser realizar alterção de senha</span></label>
                                <input type="password" name="PassTextEdt" id="PassTextEdt" class="form-control MyForms" placeholder="Senha">
                            </div>

                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblNomeCliente">Nome </label>
                                <input type="text" name="NomeClienteEdt" id="NomeClienteEdt" class="form-control MyForms" required placeholder="Nome">
                            </div>

                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblEmail">E-mail </label>
                                <input type="email" name="EmailClienteEdt" id="EmailClienteEdt" class="form-control MyForms" required placeholder="e-mail">
                            </div>

                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblTelefoneCliente">Telefone </label>
                                <input type="text" name="TelefoneClienteEdt" id="TelefoneClienteEdt" class="form-control MyForms tel" required placeholder="Telefone">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblNumCep">CEP </label>
                                <input type="text" name="NumCepClienteEdt" id="NumCepClienteEdt" class="form-control MyForms cep cepMask" required placeholder="CEP">
                            </div>

                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblRuaCliente">Rua </label>
                                <input type="text" name="RuaClienteEdt" id="RuaClienteEdt" class="form-control MyForms rua" required placeholder="Rua">
                            </div>

                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblBairroCliente">Bairro </label>
                                <input type="text" name="BairroClienteEdt" id="BairroClienteEdt" class="form-control MyForms bairro" required placeholder="Bairro">
                            </div>

                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblEstadoCliente">Estado </label>
                                <input type="text" name="select_estadoClienteEdt" id="select_estadoClienteEdt" class="form-control MyForms uf" required placeholder="Estado"/>
                            </div>

                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblNomeCidadeCliente">Cidade </label>
                                <input type="text" name="select_cidadeClienteEdt" id="select_cidadeClienteEdt" class="form-control MyForms cidade" required placeholder="Cidade"/>
                            </div>

                            <div class="col-md-10 col-sm-10 form-group">
                                <label for="lblNumero">Número </label>
                                <input type="text" name="NumCasaClienteEdt" id="NumCasaClienteEdt" class="form-control MyForms" placeholder="Número">
                            </div>

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