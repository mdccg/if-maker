<?php
include_once './Usuario.php';

class Docente extends Usuario {
    public $suap;

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

    public function getSuap() {
        return $this->suap;
    }

    public function setSuap($suap) {
        $this->suap = $suap;
    }
}
?>