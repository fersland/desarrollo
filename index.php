<?php

    class Persona {
        public $nombres = 'Fernando Reyes N';

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