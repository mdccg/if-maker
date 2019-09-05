<?php
class Inscricao {
    private $nome;
    private $data_inscricao;
    private $email;
    private $evento;
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

    public function getEvento() {
        return $this->evento;
    }

    public function setEvento($evento) {
        $this->evento = $evento;
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

    // TODO outros atributos
}
?>