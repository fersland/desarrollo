<?php

    class Persona {
        public $nombres = 'Fernando Dionicio Reyes Noboa';

        public function setNombres(string $nombres) : self{
            $this->nombres = $nombres;
            return $this;
        }

        public function getNombres() : ? string {
            return $this->nombres;
        }
    }

    $argments = new Persona();
    echo $argments->getNombres();