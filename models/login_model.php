<?php

    class login_model extends Model
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function logar()
        {
            $dados=array(':cpf' => $_POST['CPFLogin'],':senha' => $_POST['senhaLogin']);
            
            $result = $this->db->select("select cpf,nome,telefone,codigo,email,cep,rua,bairro, estado, cidade , numeroCasa from cliente where 
                    cpf = :cpf AND senha = sha2(:senha,256)",$dados);
                    
            $count = count($result);

            if ($count > 0) {
                // login
                Session::init();
                Session::set('codigo', $result[0]->codigo);
                Session::set('nome', $result[0]->nome);
                Session::set('email', $result[0]->email);
                Session::set('telefone', $result[0]->telefone);
                Session::set('cep', $result[0]->cep);
                Session::set('rua', $result[0]->rua);
                Session::set('bairro', $result[0]->bairro);
                Session::set('estado', $result[0]->estado);
                Session::set('cidade', $result[0]->cidade);
                Session::set('numeroCasa', $result[0]->numeroCasa);
                Session::set('logado', true);
                Session::set('cpf', $result[0]->cpf);
                echo("logado"); 
            } else {
                echo("error no login");
            }
            
        }
        
    }