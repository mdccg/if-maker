<?php
require_once './../connection/ConnectionFactory.php';
require_once './../model/Inscricao.php';

class InscricaoDAO {
    public function createInscricao($inscricao) {
        $connection = getConnection();

        $assoc = $inscricao->toAssoc();
        $sql = 'INSERT INTO inscricao VALUES (?, now(), ?, ?, ?, ?, ?, ?, ?);';
        $statement = mysqli_prepare($connection, $sql);
        
        mysqli_stmt_bind_param($statement, 'sssisssss',
            $assoc['nome'],
            $assoc['data_inscricao'],
            $assoc['email'],
            $assoc['evento'],
            $assoc['cpf'],
            $assoc['rg'],
            $assoc['orgao_emissor'],
            $assoc['naturalidade'],
            $assoc['data_nascimento']);
        
        return mysqli_stmt_execute($statement);
    }

    public function readInscricoes() {
        $connection = getConnection();
        
        $result = $connection->query('SELECT * FROM inscricao;');
        $array = mysqli_fetch_assoc($result);

        return $array;
    }
}
?>