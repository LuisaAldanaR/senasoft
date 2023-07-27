<?php

    class Cita {

        //--------------------------------------------------------------------------------------------------------------------
        // Atributos
        //--------------------------------------------------------------------------------------------------------------------

        private $id;
        private $nombreMascota;
        private $fecha;
        private $hora;
        private $motivo;
        private $nombreDuenio;
        private $numeroDuenio;
        private $estado;
    
        //--------------------------------------------------------------------------------------------------------------------
        // Constructor
        //--------------------------------------------------------------------------------------------------------------------

        public function __construct($id, $nombreMascota, $fecha, $hora, $motivo, $nombreDuenio, $numeroDuenio, $estado = 'Asignada'){
            $this->id = $id;
            $this->nombreMascota = $nombreMascota;
            $this->fecha = $fecha;
            $this->hora = $hora;
            $this->motivo = $motivo;
            $this->nombreDuenio = $nombreDuenio;
            $this->numeroDuenio = $numeroDuenio;
            $this->estado = $estado;

        }

        //--------------------------------------------------------------------------------------------------------------------
        // Métodos
        //--------------------------------------------------------------------------------------------------------------------

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getNombreMascota() {
            return $this->nombreMascota;
        }

        public function setNombreMascota($nombreMascota) {
            $this->nombreMascota = $nombreMascota;
        }

        public function getFecha() {
            return $this->fecha;
        }

        public function setFecha($fecha) {
            $this->fecha = $fecha;
        }

        public function getHora() {
            return $this->hora;
        }

        public function setHora($hora) {
            $this->hora = $hora;
        }

        public function getMotivo() {
            return $this->motivo;
        }

        public function setMotivo($motivo) {
            $this->motivo = $motivo;
        }

        public function getNombreDuenio() {
            return $this->nombreDuenio;
        }

        public function setNombreDuenio($nombreDuenio) {
            $this->nombreDuenio = $nombreDuenio;
        }

        public function getNumeroDuenio() {
            return $this->numeroDuenio;
        }

        public function setNumeroDuenio($numeroDuenio) {
            $this->numeroDuenio = $numeroDuenio;
        }
        
        public function getEstado(){
            return $this->estado;
        }

        public function setEstado($estado) {
            $this->estado = $estado;
        }

    }
?>
