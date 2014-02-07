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

class class_trasfondos {
    
    var $dados_trasfondo = array();

    function __construct() {
        // Esta clase asignará los trasfondos pasivos.        
        $this->generar_trasfondos();
        $this->imprimir_trasfondos();
    }
    function generar_trasfondos(){
        $aleatorio = rand(1,100);
        array_push ($this->dados_trasfondo, $aleatorio); // El primero no puede repetirse
        for ($i=1; $i<6; $i++){
            $aleatorio = rand(1,100);
            while (in_array($aleatorio, $this->dados_trasfondo)){ // Mientras esté, voy tirando
                $aleatorio = rand(1,100);
            }
            array_push ($this->dados_trasfondo, $aleatorio); // Lo meto en el array
        }
    }
    function imprimir_trasfondos(){
        echo "<h2>Trasfondos Pasivos</h2>";
        echo (
                "<ul>"
                . "<li>Trasfondo 1: " . $this->dados_trasfondo[0] . "</li>"
                . "<li>Trasfondo 2: " . $this->dados_trasfondo[1] . "</li>"
                . "<li>Trasfondo 3: " . $this->dados_trasfondo[2] . "</li>"
                . "<li>Trasfondo 4: " . $this->dados_trasfondo[3] . "</li>"
                . "<li>Trasfondo 5: " . $this->dados_trasfondo[4] . "</li>"
                . "<li>Trasfondo 6: " . $this->dados_trasfondo[5] . "</li>"
                . "</ul>");     
    }
}