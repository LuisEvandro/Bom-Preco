<?php

class ProdutoCad_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function cadProduto(){

        $descricao = $_POST["NomeProduto"];
        $valor = $_POST["ValorProduto"];
        $categoria = $_POST["select_CategoriaProduto"];
        $foto = $_POST["NomeDaFoto"];
        
        $this->db->insert('produto', array('descricao'=>$descricao,'valor'=>$valor,'categoria'=>$categoria,'foto'=>$foto));
        
        echo("Upload com sucesso!");
    }

    public function listaCategoria(){
        
        $result=$this->db->select('select id,nome from lojaphp.categoria order by nome');
		
		$result = json_encode($result);
		
		echo $result;
    }
}