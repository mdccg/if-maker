<?php
require_once './../connection/ConnectionFactory.php';
require_once './../model/Palestrante.php';

class PalestranteDAO {
    public function createPalestrante($palestrante) {
        $connection = getConnection();

        $assoc = $palestrante->toAssoc();
        $sql = 'INSERT INTO palestrante VALUES (?, ?, ?, ?, ?, ?, ?, ?);';
        $statement = mysqli_prepare($connection, $sql);
        
        mysqli_stmt_bind_param($statement, 'ssssssss',
            $assoc['id'],
            $assoc['nome'],
            $assoc['email'],
            $assoc['cpf'],
            $assoc['rg'],
            $assoc['orgao_emissor'],
            $assoc['naturalidade'],
            $assoc['data_nascimento']);
        
        return mysqli_stmt_execute($statement);
    }

    public function readPalestrantes() {
        $connection = getConnection();
        
        $result = $connection->query('SELECT * FROM palestrante;');
        $array = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return array_map('parsePalestrante', $array);
    }

    public function updatePalestrante() {
        # TODO
    }

    public function dropPalestrante() {
        # TODO
    }
}

function parsePalestrante($assoc) {
    return new Palestrante($assoc);
}
?>