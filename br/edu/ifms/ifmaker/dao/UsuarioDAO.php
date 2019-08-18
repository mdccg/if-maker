<?php
include_once "./../connection/ConnectionFactory.php";
include_once "./../model/Usuario.php";


function parseUsuario($array) {
    return new Usuario($array);
}

class UsuarioDAO {
    public $connection;

    function adicionaUsuario($usuario) {
        $this->connection = getConnection();
        pg_insert($this->connection, 'usuarios', $usuario->toArray());
        return pg_close($this->connection);
    }

    public function buscaUsuarios() {
        $this->connection = getConnection();

        $sql = "SELECT * FROM usuarios;";
        $query = pg_query($this->connection, $sql);
        $arrays = pg_fetch_all($query);
        
        pg_close($this->connection);

        return array_map('parseUsuario', $arrays);
    }

    function buscaUsuario($cpf) {
        $this->connection = getConnection();

        $sql = "SELECT * FROM usuarios WHERE cpf = '$cpf';";
        $query = pg_query($this->connection, $sql);
        $array = pg_fetch_assoc($query);
        
        pg_close($this->connection);

        return new Usuario($array);
    }

    function atualizaUsuario($usuario) {
        $this->connection = getConnection();
        
        $cpf = $usuario->getCpf();
        $db_usuario = $this->buscaUsuario($cpf);
        $array = $usuario->toArray();
        $db_array = $db_usuario->toArray();
        print_r($array);
        
        pg_update($this->connection, 'usuarios', $array, $db_array);
        return pg_close($this->connection);
    }

    function deletaUsuario($usuario) {
        $this->connection = getConnection();
        pg_delete($this->connection, 'usuarios', $usuario->toArray());
        return pg_close($this->connection);
    }
}
// [C]RUD
/*
include_once "./antrophila.php";
$array = getAntrophila();

$usuario = new Usuario($array);
$usuarioDAO->adicionaUsuario($usuario);
*/

// C[R]UD
/*
$usuario = $usuarioDAO->buscaUsuario('123.456.789-01');
$array = $usuario->toArray(); // TODO apagar
*/

// FIXME
// CR[U]D
/*
$usuario = $usuarioDAO->buscaUsuario('123.456.789-01');
$usuario->setCelular('(067) 9 9222-4131');
$usuarioDAO->atualizaUsuario($usuario);

$usuario = $usuarioDAO->buscaUsuario('123.456.789-01');
$array = $usuario->toArray();
*/

// CRU[D]
/*
$usuario = $usuarioDAO->buscaUsuario('123.456.789-01');
$usuarioDAO->deletaUsuario($usuario);
*/
?>