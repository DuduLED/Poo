<?php

    class Calculadora{
        public $numero1;
        public $numero2;

        public function __construct($numero1,$numero2){
            $this->numero1 = $numero1;
            $this->numero2 = $numero2;
        }

        public function somaNumeros(){
            echo("$this->numero1 + $this->numero2 = ".$this->numero1 + $this->numero2);
        }

        public function subNumeros(){
            echo nl2br("\n$this->numero1 - $this->numero2 = ".$this->numero1 - $this->numero2."\n");
        }

        public function multNumeros(){
            echo("$this->numero1 * $this->numero2 = ".$this->numero1 * $this->numero2);
        }

        public function dividirNumeros(){
            echo nl2br("\n$this->numero1 / $this->numero2 = ".$this->numero1 / $this->numero2);
        }

        public function __setNumero1($numero1){
            $this->$numero1 = $numero1;
        }
    }

?>