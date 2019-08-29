<?php
class Usuario {
    private $id;
    private $nome;
    private $email;
    private $cpf;
    private $rg;
    private $oe;
    private $data_nascimento;
    private $cidade;
    private $estado;

    function __construct($assoc) {
        foreach($assoc as $chave => $valor) {
            $this->{$chave} = $valor;
        }
    }

    public function toAssoc() {
        $assoc = Array();
        foreach($this as $chave => $valor) {
            $assoc{$chave} = $valor;
        }
        return $assoc;
    }

    public function getId() {
        return $this->id;
    }
    
    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }
    
    public function setEmail($email) {
        $this->email = $email;
    }

    public function getCpf() {
        return $this->cpf;
    }
    
    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getRg() {
        return $this->rg;
    }
    
    public function setRg($rg) {
        $this->rg = $rg;
    }

    public function getOe() {
        return $this->oe;
    }
    
    public function setOe($oe) {
        $this->oe = $oe;
    }

    public function getData_nascimento() {
        return $this->data_nascimento;
    }
    
    public function setData_nascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
    }

    public function getCidade() {
        return $this->cidade;
    }
    
    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }
    
    public function getEstado() {
        return $this->estado;
    }
    
    public function setEstado($estado) {
        $this->estado = $estado;
    }
}
?>