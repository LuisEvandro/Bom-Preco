<?php

    class ClienteCad extends Controller {

        function __construct() {
            parent::__construct();
            //Auth::autentica();
            $this->view->js = array('cadastroCliente/js/cadastroCliente.js');
        }
        
        function index() {
            $this->view->title = 'Cadastro de Clientes';
            $this->view->render('header');
            $this->view->render('cadastroCliente/index');
            $this->view->render('footer');
        }
    }