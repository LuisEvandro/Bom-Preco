<?php

class CategoriaCad_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function cadCategoria(){

        $nome = $_POST["NomeCategoria"];
        
        $this->db->insert('categoria', array('nome'=>$nome));
        
        echo("success");
    }
}