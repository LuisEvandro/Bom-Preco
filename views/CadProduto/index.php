<?php

    if(isset($_POST['BtnSalvarProduto'])){
        $formatosPermitidos = array("jpg", "jpeg", "png", "gif");
        $extensao = pathinfo($_FILES['Upfoto']['name'], PATHINFO_EXTENSION);

        if(in_array($extensao, $formatosPermitidos)){
            $pasta = "public/ProdutoFoto/";
            $temporario = $_FILES['Upfoto']['tmp_name'];
            $novo_nome = uniqid().".$extensao";
            
            if(move_uploaded_file($temporario, $pasta.$novo_nome)){
                $mensagem = "Upload com sucesso!";
            }else{
                $mensagem = "Erro no upload";
            }
        }else{
            $mensagem = "Formato invalido";
        }
    }

    
    echo($mensagem);
?>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-sm-offset-4 col-md-offset-4">
            <div class="txtTituloCadastros">Cadastrar Produtos</div>
            <form name="frmCadProduto" id="frmCadProduto" method="post" enctype="multipart/form-data">
                <div class="row border-form-cad">
                    
                    <div class="col-md-10 col-sm-10 form-group">
                        <label for="lblFoto">Foto do Produto </label>
                        <input type="hidden" name="NomeDaFoto" id="NomeDaFoto" value="<?php echo($novo_nome) ?>"/>
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