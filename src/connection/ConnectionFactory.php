<?php
require_once 'dados.php';

function getConnection() {
    $dados = include_dados();
    
    return mysqli_connect($dados['host'],
        $dados['user'],
        $dados['password'],
        $dados['dbname']);
}
?>