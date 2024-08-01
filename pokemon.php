<?php

    class Pokemon {
        public $nome;
        public $tipo;

        //public $ataque;
        //public $defesa;
        //public $velocidade;

        public $nivel;
        public $pontosVida;
        public $experiencia;

        function __construct(){
            $this->nivel = 1;
            $this->pontosVida = 10;
            $this->experiencia = 0;
        }

        function batalhar() {
            $this->aumentarExperiencia(5);
        }

        function aumentarNivel() {
            $this->nivel = $this->nivel + 1;
            $this->aumentarPontosVida();
            $this->experiencia = 0;
        }
        
        function aumentarPontosVida() {
            $this->pontosVida = $this->nivel * 10;
        }

        function aumentarExperiencia($exp){
            $this->experiencia += $exp;
            if($this->experiencia >= 100)
                $this->aumentarNivel();
        }

    }

    $psyduck = new Pokemon();
    $psyduck->nome = "Psyduck";
    $psyduck->tipo = "Aquático";
    for($i = 0; $i<5; $i++){
        $psyduck->batalhar();
    }
    print_r($psyduck);

    $lucario = new Pokemon();
    $lucario->nome = "Lucario";
    $lucario->tipo = "Lutador";
    print_r($lucario);
