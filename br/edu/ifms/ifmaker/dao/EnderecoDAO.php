<?php
include_once "./../connection/ConnectionFactory.php";
include_once "./../model/Endereco.php";


function parseEndereco($array) {
    return new Endereco($array);
}

class EnderecoDAO {
    public $connection;

    public function adicionaEndereco($endereco) {
        $this->connection = getConnection();
        pg_insert($this->connection, 'enderecos', $endereco->toArray());
        return pg_close($this->connection);
    }

    public function buscaEnderecos() {
        $this->connection = getConnection();

        $sql = "SELECT * FROM enderecos;";
        $query = pg_query($this->connection, $sql);
        $arrays = pg_fetch_all($query);
        
        pg_close($this->connection);

        return array_map('parseEndereco', $arrays);
    }

    public function buscaEndereco($logradouro) {
        $this->connection = getConnection();

        $sql = "SELECT * FROM enderecos WHERE logradouro = '$logradouro';";
        $query = pg_query($this->connection, $sql);
        $array = pg_fetch_assoc($query);

        pg_close($this->connection);
    
        return new Endereco($array);
    }

    public function atualizaEndereco() {
        // TODO CR[U]D
    }

    public function deletaEndereco() {
        // TODO CRU[D]
    }
}
?>