<?php
class Inscricao {
    private $id;
    private $nome;
    private $data_inscricao;
    private $email;
    private $cpf;
    private $rg;
    private $orgao_emissor;
    private $naturalidade;
    private $data_nascimento;

    function __construct($assoc) {
        foreach($assoc as $chave => $valor) {
            $this->{$chave} = $valor;
        }
    }

    function toAssoc() {
        $assoc = Array();
        foreach($this as $chave => $valor) {
            $assoc{$chave} = $valor;
        }
        return $assoc;
    }

    public function isEmpty() {
        $assoc = $this->toAssoc();
        $isEmpty = implode(' ', $assoc);
        return trim($isEmpty) == '';
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

    public function getData_inscricao() {
        return $this->data_inscricao;
    }

    public function setData_inscricao($data_inscricao) {
        $this->data_inscricao = $data_inscricao;
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

    public function getOrgao_emissor() {
        return $this->orgao_emissor;
    }
    
    public function setOrgao_emissor($orgao_emissor) {
        $this->orgao_emissor = $orgao_emissor;
    }

    public function getNaturalidade() {
        return $this->naturalidade;
    }

    public function setNaturalidade($naturalidade) {
        $this->naturalidade = $naturalidade;
    }

    public function getData_nascimento() {
        return $this->data_nascimento;
    }

    public function setData_nascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
    }
}
?>