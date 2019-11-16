<?php

class ProdutoCad_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function cadProduto(){

        $descricao=$_POST["NomeProduto"];
        $valor=$_POST["ValorProduto"];
        $categoria=$_POST["select_CategoriaProduto"];
        $foto = $_POST["upFoto"];

        $stmt = $conn->prepare('insert into trabalholoja.produto(descricao,valor,idcategoria,foto) 
                                values(:par_descricao,:par_valor,:par_categoria,:par_foto)');

        $dados=array(":par_descricao"=>$descricao,
                    ":par_valor"=>$valor,
                    ":par_categoria"=>$categoria,
                    ":par_foto"=>$foto);

        $result=$stmt->execute($dados);

        if($result){

            echo("success");
            
        }
        else{
            echo("fail");
        }
    }
}