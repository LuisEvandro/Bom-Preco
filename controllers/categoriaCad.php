<?php

class CategoriaCad extends Controller {

    function __construct() {
        parent::__construct();
        Auth::autentica();
        $this->view->js = array('cadCategoria/js/cadCategoria.js');
    }
    
    function index() {
        $this->view->title = 'Cadastro de Categoria';
		$this->view->render('header');
        $this->view->render('cadCategoria/index');
		$this->view->render('footer');
    }

    function cadCategoria(){
        $this->model->cadCategoria();
    }
}