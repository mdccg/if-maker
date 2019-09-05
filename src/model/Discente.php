<?php
require_once 'Usuario.php';

class Discente extends Usuario {
    private $ra;

    public function getRa() {
        return $this->ra;
    }

    public function setRa($ra) {
        $this->ra = $ra;
    }
}
?>