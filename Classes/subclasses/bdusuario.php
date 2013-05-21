<?php

include_once 'Classes/conexao.php';

class Classes_subclasses_bdusuario extends Classes_conexao{
    public $conexao;
    public $msg;
    public $login;
    public $listausers;
    
    // na construção já faz a conexao
    public function __construct() { 
        $result = parent::conectar();
        if($result){
            $this->conexao = parent::getConexao();
        }else {
           $this->conexao = false;
       }
    }
    
    public function autentica($usuario, $senha){
        $result = FALSE;
        if(($usuario != "") && ($senha != "")){
            if($this->conexao){
                $sql_usuario = mysql_query("SELECT * FROM PS_USUARIO WHERE USER_LOGIN='$usuario'");
                if (mysql_num_rows($sql_usuario)>0){
                    $sql_usuario_senha = mysql_query("SELECT * FROM PS_USUARIO WHERE 
                                                      USER_LOGIN='$usuario' and
                                                      USER_SENHA='$senha'");
                    if (mysql_num_rows($sql_usuario_senha)>0){
                        $result = TRUE;
                        $this->login = $sql_usuario_senha;
                    }else{
                        $this->msg = "Usuario e senha não existe.2";
                    }
                }else{
                     $this->msg = "Usuario e senha não existe.1";
                }
            }else{
                $this->msg = "Erro na conexao.";
            }
        }
        return $result;
    }

    public function listausuarios(){
        $result = FALSE;
        if($this->conexao){
            $sql_usuario = mysql_query("SELECT * FROM PS_USUARIO");
            $this->listausers = array(mysql_fetch_object($sql_usuario));
            $result = TRUE;
        }else{
            $this->msg = "Erro na conexao.";
        }
        return $result;
    }
    
    public function gravauser($usuario, $login, $senha){
        $result = FALSE;
        if($this->conexao){
            $sql_usuario = mysql_query("INSERT PS_USUARIO  
                                        (USER_NOME, USER_LOGIN, USER_SENHA) Values 
                                        ({$usuario},{$login},{$senha})");
            mysql_affected_rows($sql_usuario);
        }
        return $result;
    }
    
    public function alterauser($id){
        
    }
    
    
    public function deletauser($id){
        
    }

    public function getMsg() {
        return $this->msg;
    }
    
    public function getLogin() {
        return $this->login;
    }
    
    public function getListausers() {
        return $this->listausers;
    }

}
