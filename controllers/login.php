<?php

    class Login extends Controller {

        function __construct() {
            parent::__construct();
            $this->view->js = array('login/js/login.js');
        }
        
        function index() {
            $this->view->title = 'Login';
            $this->view->render('header');
            $this->view->render('login/index');
            $this->view->render('footer');
        }
        function logar()
        {
            $this->model->logar();
        }
    }