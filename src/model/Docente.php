<?php
require_once 'Usuario.php';

class Docente extends Usuario {
    public $suap;

    public function getSuap() {
        return $this->suap;
    }

    public function setSuap($suap) {
        $this->suap = $suap;
    }
}
?>