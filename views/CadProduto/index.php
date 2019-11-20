<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-sm-offset-4 col-md-offset-4">
            <div class="txtTituloCadastros">Cadastrar Produtos</div>
            <form name="frmCadProduto" id="frmCadProduto" method="post" enctype="multipart/form-data">
                <div class="row border-form-cad">
                    
                    <div class="col-md-10 col-sm-10 form-group">
                        <label for="lblFoto">Foto do Produto </label>
                        <input type="file" class="form-upload" name="Upfoto" id="Upfoto" required>
                    </div>

                    <div class="col-md-10 col-sm-10 form-group">
                        <label for="lblNomeProduto">Nome Produto</label>
                        <input type="text" name="NomeProduto" id="NomeProduto" class="form-control MyForms" required placeholder="Produto">
                    </div>

                    <div class="col-md-10 col-sm-10 form-group">
                        <label for="lblNomeCidadeCliente">Categoria </label>
                        <select name="select_CategoriaProduto" id="select_CategoriaProduto" class="form-control MyForms">
                            <!-- Dados de categoria do banco -->
                        </select>
                    </div>
                    
                    <div class="col-md-10 col-sm-10 form-group">
                        <label for="lblValorProduto">Valor do Produto</label>
                        <input type="number" step="0.01" name="ValorProduto" id="ValorProduto" min="0.01" class="form-control MyForms" required placeholder="Valor">
                    </div>

                    <div class="col-sm-10 col-md-10" style="margin-top:15px;">
                        <button type="buttom" name="BtnSalvarProduto" id="BtnSalvarProduto" class="btn btn-success btn-lg">Adicionar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>