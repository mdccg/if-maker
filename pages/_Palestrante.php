<?php
require_once './../src/connection/ConnectionFactory.php';
require_once './../src/dao/PalestranteDao.php';
require_once './../src/model/Palestrante.php';

$palestrante = Array('id' => uniqid(''));

foreach($_POST as $chave => $valor) {
    $palestrante{$chave} = $valor;
}

$palestranteDao = new PalestranteDao;
$palestrante = new Palestrante($palestrante);

$palestranteDao->createPalestrante($palestrante);

$json = json_encode($palestrante->toAssoc());

setcookie('palestrante', $json, 0, '/');
header('Location: ./Perfil.php');
?>