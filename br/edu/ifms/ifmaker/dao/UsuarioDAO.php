<?php
include "./../connection/ConnectionFactory.php";
include "./../model/Usuario.php";


class UsuarioDAO {
    public $connection;

    function adicionaUsuario($array) {
        $this->connection = getConnection();
        pg_insert($this->connection, 'usuarios', $array);
        pg_close($this->connection);
    }

    function buscaUsuario($cpf) {
        $this->connection = getConnection();
        $sql = "SELECT * FROM usuarios WHERE cpf = '$cpf';";
        
        $query = pg_query($this->connection, $sql);
        pg_close($this->connection);
        
        $array = pg_fetch_assoc($query);
        return new Usuario($array);
    }

    function atualizaUsuario($usuario) {
        // TODO CR[U]D
    }

    function deletaUsuario($array) {
        $this->connection = getConnection();
        pg_delete($this->connection, 'usuarios', $array); // TODO cast Usuario <=> Array e vice-versa
        pg_close($this->connection);
    }
}

$usuarioDAO = new UsuarioDAO;

/* [C]RUD
include "antrophila.php";
$usuarioDAO->adicionaUsuario($usuario);
*/

/* C[R]UD
$usuario = $usuarioDAO->buscaUsuario('123.456.789-01');
print_r($usuario);
*/

/* CR[U]D */

/* CRU[D]
$usuarioDAO->deletaUsuario($usuario);
*/
?>

<!-- <pre><?php print_r($usuario) ?></pre> -->