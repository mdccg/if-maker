<?php
class Usuario {
    private $cpf;
    private $nome;
    private $data_nascimento;
    private $email;
    private $celular;
    private $endereco;
    private $numero;
    private $complemento;
    private $bairro;
    private $cep;
    private $estado;
    private $cidade;
    private $nacionalidade;
    private $naturalidade;
    private $historico;
    private $poc;
    private $hora;
    private $eventos;
    private $senha;
    
    public function __construct() {
    }

    /*
    public function __construct($cpf, $nome, $dataNascimento, $email, $celular, $endereco, $numero, $complemento, $bairro, $cep, $estado, $cidade, $nacionalidade, $naturalidade, $historico, $poc, $hora, $eventos, $senha) {
        $this->cpf = $cpf;
        $this->nome = $nome; 
        $this->dataNascimento = $dataNascimento;
        $this->email = $email;
        $this->celular = $celular;
        $this->endereco = $endereco;
        $this->numero = $numero;
        $this->complemento = $complemento;
        $this->bairro = $bairro;
        $this->cep = $cep;
        $this->estado = $estado;
        $this->cidade = $cidade;
        $this->nacionalidade = $nacionalidade;
        $this->naturalidade = $naturalidade;
        $this->historico = $historico;
        $this->poc = $poc;
        $this->hora = $hora;
        $this->eventos = $eventos;
        $this->senha = md5($senha);
    }
    */

    // TODO adicionar getters e setters
}
?>