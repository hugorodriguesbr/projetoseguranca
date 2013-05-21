<?php
/**
 * Classe senha
 * @version v1.0
 * @author Marlon Hugo <marlon.hugo@unis.edu.br>
 */
class Classes_senha{
    
    /**
     * Usuário
     * @name $user
     * @todo armazenar usuáro
     */
    private $user;
    
    /**
     * Senha
     * @name $senha
     * @todo armazenar a senha
     */
    private $senha;
    
    public function getUser() {
        return $this->user;
    }

    public function setUser($user) {
        $this->user = $user;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }    
}
