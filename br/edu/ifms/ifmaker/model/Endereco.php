<?php
class Endereco {
    private $id;
    private $logradouro;
    private $numero;
    private $complemento;
    private $bairro;
    private $cep;
    private $estado;
    private $cidade;

    public function __construct($args) {
        foreach ($args as $chave => $valor)
            $this->{$chave} = $valor;
    }

    public function getId() { 
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getLogradouro() {
        return $this->logradouro;
    }

    public function setLogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getComplemento() {
        return $this->complemento;
    }

    public function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function getCep() {
        return $this->cep;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }
}
?>