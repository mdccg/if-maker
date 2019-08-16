<?php
include "./../connection/ConnectionFactory.php";
include "./../model/Usuario.php";


class UsuarioDAO {
    var $connection;

    function adicionaUsuario($usuario) {
        $this->connection = getConnection();
        pg_insert($this->connection, 'usuarios', (array) $usuario);
        pg_close($this->connection);
    }

    function buscaUsuario($cpf) {
        $this->connection = getConnection();

        $sql = "SELECT * FROM usuarios WHERE cpf = '$cpf';";
        $query = pg_query($this->connection, $sql);
        
        pg_close($this->connection);
        return pg_fetch_assoc($query);
    }

    function atualizaUsuario($usuario) {
        // TODO
    }

    function deletaUsuario($usuario) {
        // TODO
    }
}
$usuarioDAO = new UsuarioDAO;
$usuario = $usuarioDAO->buscaUsuario('?');
print_r($usuario); # https://stackoverflow.com/questions/2715465/converting-a-php-array-to-class-variables
?>