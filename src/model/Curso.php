<?php
include_once './Docente.php';

class Curso {
    private $id;
    private $titulo;
    private $turno;
    private $docente;

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

    public function getId() {
        return $this->id;
    }
    
    public function setId($id) {
        $this->id = $id;
    }

    public function getTitulo() {
        return $this->titulo;
    }
    
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getTurno() {
        return $this->turno;
    }
    
    public function setTurno($turno) {
        $this->turno = $turno;
    }

    public function getDocente() {
        return $this->docente;
    }
    
    public function setDocente($docente) {
        $this->docente = $docente;
    }    
}
?>