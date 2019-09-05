<?php
require_once 'dados.php';

function getConnection() {
    $dados = include_dados();

    $connection_string = 'host=' . $dados['host']
        . ' port=' . $dados['port']
        . ' dbname=' . $dados['dbname']
        . ' user=' . $dados['user']
        . ' password=' . $dados['password'];
    
    return pg_connect($connection_string);
}
?>