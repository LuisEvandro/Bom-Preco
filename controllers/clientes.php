<?php

    class Clientes extends Controller {

        function __construct() {
            parent::__construct();
            $this->view->js = array('clientes/js/clientes.js');
        }
        
        function index() {
            error_reporting(E_ALL &~E_NOTICE); session_start();
            if($_SESSION["cpf"] == "418.524.648-01"):
                
                Auth::autentica();
                $this->view->title = 'Lista de Clientes';
                $this->view->render('header');
                $this->view->render('clientes/index');
                $this->view->render('footer');
            
            else:
                $this->view->title = 'Lista de Clientes';
                $this->view->render('header');
                $this->view->render('error/index');
                $this->view->render('footer');
            endif;
        }

        function insert()
        {
            $this->model->insert();
        }
        function lista()
        {
            $this->model->lista();
        }
        
        function del()
        {
            $this->model->del();
        }
        
        
        function loadData()
        {
            $this->model->loadData();
        }
        
        function save()
        {
            $this->model->save();
        }
    }