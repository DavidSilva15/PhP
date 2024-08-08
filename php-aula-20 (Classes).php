<?php

    //Classes
    class Carro{
        var $tipo;
        var $velMax;
        var $nome;
        var $liga;

        function Carro($tp, $no){
            $this->tipo = $tp;
            
            $this->liga = false;
            
            $this->nome = $no;
            
            if($tp == 1){
                $this->velMax == 160;
            }else if($tp == 2){
                $this->velMax = 300;
            }else{
                $this->velMax = 100;
            }
        }

        function ligar (){
            $this->liga = true;
        }
        
        function desligar (){
            $this->liga = false;
        }

        function velocidade($vl){
            if($vl > $this->velMax){
                $this->vel = $this->velMax;
            }else{
                $this->vel = $vl;
            }
        }

        function id(){
            echo 'Nome do carro: ' . $this->nome . '<br>' . '<br>';
            echo 'Tipo do carro: ' . $this->tipo  . '<br>' . '<br>';
            echo 'Velocidade máxima: ' . $this->velMax  . '<br>' . '<br>';
            if($this->liga){
                echo 'Este carro está ligado'  . '<br>' . '<br>';
            }else{
                echo 'Este carro está desligado' . '<br>' . '<br>';
            }
        }

    }

    $carro1 = new Carro(2, 'Rapid');
    
    $carro1->id();

?>