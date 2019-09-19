<?php
class EventoDao {
    public function createEvento($evento) {
        $connection = getConnection();

        $assoc = $evento->toAssoc();
        $sql = 'INSERT INTO evento VALUES (?, ?, ?, ?);';
        $statement = mysqli_prepare($connection, $sql);
        
        mysqli_stmt_bind_param($statement, 'ssss',
            $assoc['id'],
            $assoc['titulo'],
            $assoc['data_evento'],
            $assoc['palestrante_id']);
        
        return mysqli_stmt_execute($statement);
    }

    public function readEventos() {
        $connection = getConnection();
        
        $result = $connection->query('SELECT * FROM evento;');
        $array = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return array_map('parseEvento', $array);
    }

    public function relaciona($inscricao_id, $evento_id) {
        $connection = getConnection();

        $sql = 'INSERT INTO inscricao_evento VALUES (?, ?);';
        $statement = mysqli_prepare($connection, $sql);
        
        mysqli_stmt_bind_param($statement, 'ss', $inscricao_id, $evento_id);
        
        return mysqli_stmt_execute($statement);
    }
}

function parseEvento($assoc) {
    return new Evento($assoc);
}
?>