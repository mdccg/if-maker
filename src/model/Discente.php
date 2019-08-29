<?php
include_once './Usuario.php';

class Discente extends Usuario {
    private $ra;

    function __construct($assoc) {
        foreach($assoc as $chave => $valor) {
            $this->{$chave} = $valor;
        }
    }

    public function toAssoc() {
        $assoc = Array();
        foreach($this as $chave => $valor) {
            $assoc{$chave} = $valor;
        }
        return $assoc;
    }

    public function getRa() {
        return $this->ra;
    }

    public function setRa($ra) {
        $this->ra = $ra;
    }
}
?>