<?php
class Evento {
    private $id;
    private $titulo;
    private $data_evento;
    private $palestrante_id;

    function __construct($assoc) {
        foreach($assoc as $chave => $valor) {
            $this->{$chave} = $valor;
        }
    }

    function toAssoc() {
        $assoc = Array();
        foreach($this as $chave => $valor) {
            $assoc{$chave} = $valor;
        }
        return $assoc;
    }

    public function isEmpty() {
        $assoc = $this->toAssoc();
        $isEmpty = implode(' ', $assoc);
        return trim($isEmpty) == '';
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

    public function getData_evento() {
        return $this->data_evento;
    }

    public function setData_evento($data_evento) {
        $this->data_evento = $data_evento;
    }

    public function getPalestrante_id() {
        return $this->palestrante_id;
    }

    public function setPalestrante_id($palestrante_id) {
        $this->palestrante_id = $palestrante_id;
    }
}
?>