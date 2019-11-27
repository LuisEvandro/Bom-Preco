<?php

    class ClienteEditar extends Controller {

        function __construct() {
            parent::__construct();
            //Auth::autentica();
            $this->view->js = array('editarCliente/js/editarCliente.js');
        }
        
        function index() {
            $this->view->title = 'Editar Cliente';
            $this->view->render('header');
            $this->view->render('editarCliente/index');
            $this->view->render('footer');
        }
    }