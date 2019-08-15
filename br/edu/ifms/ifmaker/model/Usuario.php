<?php
class Usuario {
    public $nome;
    public $dataNascimento;
    public $cpf;
    public $email;
    public $celular;
    public $endereco;
    public $numero;
    public $complemento;
    public $bairro;
    public $cep;
    public $estado;
    public $cidade;
    public $nacionalidade;
    public $naturalidade;
    public $historico;
    public $poc;
    public $hora;
    public $eventos;
    public $senha;
    
    function __construct($nome, $dataNascimento, $cpf, $email, $celular, $endereco, $numero, $complemento, $bairro, $cep, $estado, $cidade, $nacionalidade, $naturalidade, $historico, $poc, $hora, $eventos, $senha) {
        switch(func_num_args()) {
        case 0:
            return;
        
        case 18:
            $this->nome = $nome;
            $this->dataNascimento = $dataNascimento;
            $this->cpf = $cpf;
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
            return;
        }
    }
}
