<?php

    class clientes_model extends Model {

        public function __construct() {
            parent::__construct();
        }
        
        public function lista() 
        {  
            $result=$this->db->select('select codigo,trim(cpf)as cpf,nome,email from cliente order by nome');
            
            $result = json_encode($result);
            
            echo $result;
        }
        

        public function insert() 
        {
            //$codigo = $_POST['txtcod'];//finalizar cod increment
            $cpf    = $_POST['NumCPFCliente'];
            $nome   = $_POST['NomeCliente'];
            $email    = $_POST['EmailCliente'];
            $fone   = $_POST['TelefoneCliente'];
            $senha  = $_POST['PassText'];
            $cep = $_POST['NumCepCliente'];
            $rua = $_POST['RuaCliente'];
            $bairro = $_POST['BairroCliente'];
            $estado = $_POST['select_estadoCliente'];
            $cidade = $_POST['select_cidadeCliente'];
            $numcasa = $_POST['NumCasaCliente'];
            
            $validadeCPF = $this->db->select('select * from cliente where cpf = :cpf',array (":cpf"=>$cpf));
            
            $retorno = json_encode($validadeCPF);
            
            if($retorno != null && $retorno != "" && $retorno != "[]"){
                echo "cpf-fail";
            }else{
                $this->db->insert('cliente', array('cpf'=>$cpf,'nome'=>$nome,'email'=>$email,'telefone'=>$fone,
                                'senha'=>hash('sha256',$senha),'email'=> $email,
                                'cep'=>$cep,'rua'=>$rua,'bairro'=>$bairro,'estado'=>$estado,
                                'cidade'=>$cidade, 'numeroCasa'=>$numcasa));
                echo "success";
            }
        }
        
        public function del() 
        {  
            $cod=(int)$_POST['cod'];
            
            $this->db->delete('cliente',"codigo='$cod'");
        }
        
        public function loadData() 
        {  
            $cod=(int)$_POST['cod'];
            
            $result=$this->db->select('select codigo,trim(cpf)as cpf,nome,email,telefone,cep,rua,bairro,estado,cidade,numeroCasa from cliente where codigo=:cod',array(":cod"=>$cod));
            $result = json_encode($result);
            echo($result);
        }
        
        
        public function save() 
        {
            $codigo = $_POST['numCodeHidden'];//finalizar cod increment
            $cpf    = $_POST['NumCPFClienteEdt'];
            $nome   = $_POST['NomeClienteEdt'];
            $email    = $_POST['EmailClienteEdt'];
            $fone   = $_POST['TelefoneClienteEdt'];
            $senha  = $_POST['PassTextEdt'];
            $cep = $_POST['NumCepClienteEdt'];
            $rua = $_POST['RuaClienteEdt'];
            $bairro = $_POST['BairroClienteEdt'];
            $estado = $_POST['select_estadoClienteEdt'];
            $cidade = $_POST['select_cidadeClienteEdt'];
            $numcasa = $_POST['NumCasaClienteEdt'];

            $dadosSave=array('codigo'=>$codigo,'nome'=>$nome,'email'=>$email,'telefone'=>$fone,
                        'email'=> $email,'cep'=>$cep,'rua'=>$rua,'bairro'=>$bairro,
                        'estado'=>$estado,'cidade'=>$cidade, 'numeroCasa'=>$numcasa);

            
            if($senha!=""){
                $senha=hash('sha256',$senha);
                $dadosSave['senha']=$senha;
            }

            Session::init();
            Session::set('codigo', $codigo);
            Session::set('nome', $nome);
            Session::set('email', $email);
            Session::set('telefone', $fone);
            Session::set('cep', $cep);
            Session::set('rua', $rua);
            Session::set('bairro', $bairro);
            Session::set('estado', $estado);
            Session::set('cidade', $cidade);
            Session::set('numeroCasa', $numcasa);
            Session::set('cpf', $cpf);
            
        $this->db->update('cliente', $dadosSave,"codigo='$codigo'");
        echo "success";
        
        }
    }