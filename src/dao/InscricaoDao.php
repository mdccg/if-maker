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

    public function getInscricaoByCpf($cpf) {
        $connection = getConnection();

        $result = $connection->query("SELECT * FROM inscricao WHERE cpf = '$cpf';");
        $array = mysqli_fetch_assoc($result);

        return new Inscricao($array);
    }

    public function updateInscricao($inscricao) {
        $connection = getConnection();
        
        $assoc = $inscricao->toAssoc();
        $sql = "UPDATE inscricao SET nome = '" . $assoc['nome'] . "', data_inscricao = '" . $assoc['data_inscricao'] . "', email = '" . $assoc['email'] . "', cpf = '" . $assoc['cpf'] . "', rg = '" . $assoc['rg'] . "', orgao_emissor = '" . $assoc['orgao_emissor'] . "', naturalidade = '" . $assoc['naturalidade'] . "', data_nascimento = '" . $assoc['data_nascimento'] . "' WHERE id = '". $assoc['id'] . "';";

        return ($connection->query($sql) == true) ? $connection->query($sql) : $connection->error;
    }
}

function parseInscricao($assoc) {
    return new Inscricao($assoc);
}
?>
