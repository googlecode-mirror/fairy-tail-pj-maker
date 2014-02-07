<?php

/**
 * Esta clase asignará los trasfondos pasivos del personaje
 *
 * @author usuario
 */
class class_trasfondos {
    //put your code here
    function __construct() {
        $this->imprimir_trasfondos();        
    }
    
    function imprimir_trasfondos(){
        echo ("<h2>Trasfondos Pasivos</h2>");
        echo ("<ul>"
                . "<li>Trasfondo 1</li>"
                . "<li>Trasfondo 2</li>"
                . "<li>Trasfondo 3</li>"
                . "<li>Trasfondo 4</li>"
                . "<li>Trasfondo 5</li>"
                . "<li>Trasfondo 6</li>"
                . "</ul>");           
    }    
}
