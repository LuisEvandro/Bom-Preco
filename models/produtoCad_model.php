<?php

class ProdutoCad_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function cadProduto(){
    
        //pega a extensao do arquivo
        $nome = $_POST['Upfoto']['name'];
        $extensao = explode('.', $nome);
        $extensao = end($extensao);
        $novo_nome = rand() . '.' . $extensao;

            $diretorio = "public/ProdutoFoto/"; // diretorio para enviar o arquivo

            //Fazer o UP
            move_uploaded_file($_POST["Upfoto"]["tmp_name"], $diretorio.$novo_nome);
            
            $descricao=$_POST["NomeProduto"];
            $valor=$_POST["ValorProduto"];
            $categoria=$_POST["select_CategoriaProduto"];
            $foto = $novo_nome;

            $this->db->insert('produto', array('descricao'=>$descricao,'valor'=>$valor,'categoria'=>$categoria,'foto'=>$foto));
            
            echo("UpSuccess");
    }

    public function listaCategoria(){
        
        $result=$this->db->select('select id,nome from lojaphp.categoria order by nome');
		
		$result = json_encode($result);
		
		echo $result;
    }
}