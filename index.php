<?php

    class Persona {
        public $nombres = 'Becky Rebecca Reyes Noboa';
        public $edad = 4;

        public function setNombres(string $nombres) : self {
            $this->nombres = $nombres;
            return $this;
        }

        public function getNombres() : ? string {
            return $this->nombres;
        }

        public function setEdad(int $edad) : self {
            $this->edad = $edad;
            return $this;
        }

        public function getEdad() : ? int {
            return $this->edad;
        }


    }

    $argments = new Persona();
    echo $argments->getNombres();

    echo 'Tiene '. $argments->getEdad(). ' años';