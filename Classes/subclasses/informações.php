<?php

class Classes_subclasses_informaçoes extends Classes_senha{
    private $url;
    private $info;
    private $palavraschave;
    
    public function getUrl() {
        return $this->url;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function getInfo() {
        return $this->info;
    }

    public function setInfo($info) {
        $this->info = $info;
    }

    public function getPalavraschave() {
        return $this->palavraschave;
    }

    public function setPalavraschave($palavraschave) {
        $this->palavraschave = $palavraschave;
    }
    
    public function setSenha($senha){
        parent::setSenha($senha);
    }
    
    public function setUser($user) {
        parent::setUser($user);
    }
    
    public function getUser() {
        parent::getUser();
    }
    
    public function getSenha() {
        parent::getSenha();
    }
}
