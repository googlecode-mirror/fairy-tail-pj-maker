<?php

class class_caracteristicas {
    
    // Atributos
    var $destreza;
    var $constitucion;
    var $inteligencia;
    var $presencia;
    var $sentidos;
        
    // La función generar_pj lo que hace es llevar el hilo principal de la generación de personajes.
    function __construct(){
        $this->car_gen();
        $this->imprimir_pj();
    }

    // La función char_gen genera seis tiradas y las ordena de mayor a menor.
    // Sólo hay cinco características, el motivo de hacer esto es desechar la menor.
    function car_gen(){
        $car_array = array();
        for ($i=0; $i<=5; $i++){
            array_push ($car_array, rand (3,10));
        }
        rsort($car_array);
        $this->car_sel($car_array);
    }

    function car_sel($tiradas){
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
        $this->destreza = $tiradas[0];
        $this->constitucion = $tiradas[1];
        $this->inteligencia = $tiradas[2];
        $this->presencia = $tiradas[3];
        $this->sentidos = $tiradas[4];                
    }
    function car_distancia($tiradas){
        $this->destreza = $tiradas[4];
        $this->constitucion = $tiradas[2];
        $this->inteligencia = $tiradas[1];
        $this->presencia = $tiradas[3];
        $this->sentidos = $tiradas[0];                
    }
    function car_mental($tiradas){
        $this->destreza = $tiradas[3];
        $this->constitucion = $tiradas[4];
        $this->inteligencia = $tiradas[1];
        $this->presencia = $tiradas[0];
        $this->sentidos = $tiradas[2];                
    }
    
    function imprimir_pj(){
        echo ("<h1>Características</h1>");
        echo ("<ul>");
        echo ("<li>Destreza: " . $this->destreza) . "</li>";
        echo ("<li>Constitución: " . $this->constitucion) . "</li>";
        echo ("<li>Inteligencia: " . $this->inteligencia) . "</li>";
        echo ("<li>Presencia: " . $this->presencia) . "</li>";
        echo ("<li>Sentidos: " . $this->sentidos) . "</li>";
        echo ("</ul>");
    }
}

?>