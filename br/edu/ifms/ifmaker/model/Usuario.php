<?php
class Usuario {
    private $cpf;
    private $nome;
    private $data_nascimento;
    private $email;
    private $celular;
    private $nacionalidade;
    private $naturalidade;
    private $historico;
    private $poc;
    private $hora;
    private $eventos;
    private $senha;
    private $endereco_id;

    public function __construct($args) {
        foreach ($args as $chave => $valor) {
            $this->{$chave} = $valor;
        }
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getData_nascimento() {
        return $this->data_nascimento;
    }

    public function setData_nascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getCelular() {
        return $this->celular;
    }

    public function setCelular($celular) {
        $this->celular = $celular;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    public function getNaturalidade() {
        return $this->naturalidade;
    }

    public function setNaturalidade($naturalidade) {
        $this->naturalidade = $naturalidade;
    }

    public function getHistorico() {
        return $this->historico;
    }

    public function setHistorico($historico) {
        $this->historico = $historico;
    }

    public function getPoc() {
        return $this->poc;
    }

    public function setPoc($poc) {
        $this->poc = $poc;
    }

    public function getHora() {
        return $this->hora;
    }

    public function setHora($hora) {
        $this->hora = $hora;
    }

    public function getEventos() {
        return $this->eventos;
    }

    public function setEventos($eventos) {
        $this->eventos = $eventos;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getEndereco_id() {
        return $this->endereco;
    }

    public function setEndereco_id($endereco_id) {
        $this->endereco_id = $endereco_id;
    }
}