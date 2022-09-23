<?php
class Alumno{
        //ATRIBUTOS
        public $id;
        public $nombre;
        public $edad;

        public function __construct($id, $nombre, $edad){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->edad = $edad;
        }
}