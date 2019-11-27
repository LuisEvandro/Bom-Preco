<?php

class ProdutoCad extends Controller {

    function __construct() {
        parent::__construct();
        $this->view->js = array('CadProduto/js/CadProduto.js');
    }
    
    function index() {
        error_reporting(E_ALL &~E_NOTICE); session_start();
        if($_SESSION["cpf"] == "418.524.648-01"):
                Auth::autentica();
                $this->view->title = 'Cadastro de Produtos';
                $this->view->render('header');
                $this->view->render('CadProduto/index');
                $this->view->render('footer');
        else:
            $this->view->title = 'Lista de Clientes';
            $this->view->render('header');
            $this->view->render('error/index');
            $this->view->render('footer');
        endif;
    }

    function cadProduto(){
        $this->model->cadProduto();
    }

    function listaCategoria(){
        $this->model->listaCategoria();
    }
  
}