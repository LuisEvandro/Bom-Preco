<?php

class ProdutoCad_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function cadProduto(){
        
        if(isset($_FILES['Upfoto'])){
            $formatosPermitidos = array("jpg", "jpeg", "png", "gif");
            $extensao = pathinfo($_FILES['Upfoto']['name'], PATHINFO_EXTENSION);
            $novo_nome = 0;

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

        $descricao = $_POST["NomeProduto"];
        $valor = $_POST["ValorProduto"];
        $categoria = $_POST["select_CategoriaProduto"];
        
        $this->db->insert('produto', array('descricao'=>$descricao,'valor'=>$valor,'categoria'=>$categoria,'foto'=>$novo_nome));
        echo($mensagem);

    }

    public function listaCategoria(){
        
        $result=$this->db->select('select id,nome from lojaphp.categoria order by nome');
		
		$result = json_encode($result);
		
		echo $result;
    }
}