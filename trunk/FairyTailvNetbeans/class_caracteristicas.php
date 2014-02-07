<?php

/* 
 * Copyright (C) 2014 usuario
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */


class class_caracteristicas {
/**
 * Esta clase asignará las características del personaje
 *
 * @author usuario
 */    
    // Atributos
    var $destreza;
    var $constitucion;
    var $inteligencia;
    var $presencia;
    var $sentidos;
    var $tipo_pj;
        
    // La función generar_pj lo que hace es llevar el hilo principal de la generación de personajes.
    function __construct($tipo_pj){
        $this->tipo_pj=$tipo_pj;
        $this->car_gen($tipo_pj);
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
        $this->car_sel($car_array, $this->tipo_pj);
    }

    function car_sel($tiradas, $tipo_pj){
        // Esta función repartirá las características según el tipo de personaje
        //$tipo_pj='melero'; // En principio generaré un melé, ya agregaré un formulario al index
        switch ($tipo_pj) {
            case 'Melero':
                $this->car_melero($tiradas); break;
            case 'Distancia':                
                $this->car_distancia($tiradas); break;
            case 'Mental':
                $this->car_mental($tiradas); break;
            default: echo ("<p>Se ha producido un terrible error...</p>"); break;
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
        echo ("<h2>Características</h2>");
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