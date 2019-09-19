<?php
if($_POST['cpf'] != $_POST['senha']) {
    header('Location: ./Palestrante.php');
} else {
    require_once './../src/connection/ConnectionFactory.php';
    require_once './../src/dao/PalestranteDao.php';
    require_once './../src/model/Palestrante.php';

    $cpf = $_POST['cpf'];

    $palestranteDao = new PalestranteDao;
    $palestrante = $palestranteDao->getPalestranteByCpf($cpf);

    if($palestrante->isEmpty())
        header('Location: ./Palestrante.php');
    else {
        $json = json_encode($palestrante->toAssoc());
        setcookie('palestrante', $json, 0, '/');
        header('Location: ./Perfil.php');
    }
}
?>