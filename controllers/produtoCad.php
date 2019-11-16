<?php

class ProdutoCad extends Controller {

    function __construct() {
        parent::__construct();
        //Auth::autentica();
        $this->view->js = array('CadProduto/js/CadProduto.js');
    }
    
    function index() {
        $this->view->title = 'Cadastro de Produtos';
		$this->view->render('header');
        $this->view->render('CadProduto/index');
		$this->view->render('footer');
    }

    function cadProduto(){
        $this->model->cadProduto();
    }

    function listaCategoria(){
        $this->model->listaCategoria();
    }
  
}