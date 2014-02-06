<?php

class pj {
    
    // Atributos
    var $destreza;
    var $constitucion;
    var $inteligencia;
    var $presencia;
    var $sentidos;
        
    // La función generar_pj lo que hace es llevar el hilo principal de la generación de personajes.
    function __construct(){
        $tiradas = $this->car_gen();
        $this->car_sel($tiradas);
        $this->imprimir_pj();
    }

    // La función char_gen genera seis tiradas y las ordena de mayor a menor.
    // Sólo hay cinco características, el motivo de hacer esto es desechar la menor.
    private function car_gen(){
        $car_array = array();
        for ($i=0; $i<=5; $i++){
            array_push ($car_array, rand (3,10));
        }
        return rsort ($car_array);
    }

    private function car_sel($tiradas){
        // Esta función repartirá las características según el tipo de personaje
        $tipo_pj='melero'; // En principio generaré un melé, ya agregaré un formulario al index
        switch ($tipo_pj) {
            case 'melero':
                $this->car_melero($tiradas); break;
            case 'distancia':                
                $this->car_distancia($tiradas); break;
            case 'mental':
                $this->car_mental($tiradas); break;
            default: echo ("<h1>Se ha producido un terrible error</h1>"); break;
        }
    }
    
    function car_melero($tiradas){
        $this->$destreza = $this->$tiradas[0];
        $this->$constitucion = $this->$tiradas[1];
        $this->$inteligencia = $this->$tiradas[2];
        $this->$presencia = $this->$tiradas[3];
        $this->$sentidos = $this->$tiradas[4];                
    }
    function car_distancia($tiradas){
        $this->$destreza = $this->$tiradas[4];
        $this->$constitucion = $this->$tiradas[2];
        $this->$inteligencia = $this->$tiradas[1];
        $this->$presencia = $this->$tiradas[3];
        $this->$sentidos = $this->$tiradas[0];                
    }
    function car_mental($tiradas){
        $this->$destreza = $this->$tiradas[3];
        $this->$constitucion = $this->$tiradas[4];
        $this->$inteligencia = $this->$tiradas[1];
        $this->$presencia = $this->$tiradas[0];
        $this->$sentidos = $this->$tiradas[2];                
    }
    
    function imprimir_pj(){
        echo ("<h1>Características</h1>");
        echo ("<ul>");
        echo ("<li>Destreza: </li>" . $this->$destreza);
        echo ("<li>Constitución: </li>" . $this->$constitucion);
        echo ("<li>Inteligencia: </li>" . $this->$inteligencia);
        echo ("<li>Presencia: </li>" . $this->$presencia);
        echo ("<li>Sentidos: </li>" . $this->$sentidos);
        echo ("</ul>");
    }
}

?>