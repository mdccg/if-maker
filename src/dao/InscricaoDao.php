<?php
class InscricaoDao {
    public function createInscricao($inscricao) {
        $connection = getConnection();

        $assoc = $inscricao->toAssoc();
        $sql = 'INSERT INTO inscricao VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);';
        $statement = mysqli_prepare($connection, $sql);
        
        mysqli_stmt_bind_param($statement, 'sssssssss',
            $assoc['id'],
            $assoc['nome'],
            $assoc['data_inscricao'],
            $assoc['email'],
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
        $array = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return array_map('parseInscricao', $array);
    }

    public function getEventosByInscricao($inscricao_id) {
        $connection = getConnection();

        $result = $connection->query("SELECT evento.* FROM evento"
            . " JOIN inscricao_evento ON evento.id = inscricao_evento.evento_id"
            . " JOIN inscricao ON inscricao.id = inscricao_evento.inscricao_id"
            . " WHERE inscricao.id = '$inscricao_id';");
        $array = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return array_map('parseEvento', $array);
    }
}

function parseInscricao($assoc) {
    return new Inscricao($assoc);
}
?>