<?php

class Classes_conexao {
    public static $host = "127.0.0.1";
    public static $dbname = "projetoseguranca";
    public static $usuario = "root";
    public static $password = "root";
    public $conexao;
    
    public function conectar(){
        $return = false;
        if(@$id = mysql_connect(self::$host, self::$usuario, self::$password)) {
            if(@$con=mysql_select_db(self::$dbname,$id)) {
              $return = true;
              $this->conexao = $con;
            }
        }
        return $return;
    }
    
    public function getConexao() {
        return $this->conexao;
    }
}
