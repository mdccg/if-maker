<?php
require_once './../connection/ConnectionFactory.php';
require_once './../model/Evento.php';

class EventoDAO {
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

    public function updateEvento() {
        # TODO
    }

    public function deleteEvento() {
        # TODO
    }
}

function parseEvento($assoc) {
    return new Evento($assoc);
}
?>