<?php
class UsuarioDAO {
    public function createUsuario($usuario) {
        $connection = getConnection();

        $assoc_array = $usuario->toAssoc();
        pg_insert($connection, 'usuarios', $assoc_array);
        
        return pg_close($connection);
    }

    public function readUsuario($id) {
        $connection = getConnection();

        $query = 'SELECT * FROM "usuarios" WHERE "id" = '. $id;
        $result = pg_query($connection, $query);
        $assoc = pg_fetch_assoc($result);
        pg_close($connection);

        return new Usuario($assoc);
    }

    public function readUsuarios() {
        $connection = getConnection();

        $query = 'SELECT * FROM "usuarios";';
        $result = pg_query($connection, $query);
        $array = pg_fetch_all($result);
        pg_close($connection);

        return array_map('parseUsuario', $array);
    }

    public function dropUsuario($usuario) {
        $connection = getConnection();

        $assoc_array = $usuario->toAssoc();
        pg_delete($connection, 'usuarios', $assoc_array);
        
        return pg_close($connection);
    }
}

function parseUsuario($assoc) {
    return new Usuario($assoc);
}
?>