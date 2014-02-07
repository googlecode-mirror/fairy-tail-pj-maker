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

    function __construct() {
        // Esta clase asignará los trasfondos pasivos.
        $this->imprimir_trasfondos();
    }
    function imprimir_trasfondos(){
        echo "<h2>Trasfondos Pasivos</h2>";
        echo (
                "<ul>"
                . "<li>Trasfondo 1</li>"
                . "<li>Trasfondo 2</li>"
                . "<li>Trasfondo 3</li>"
                . "<li>Trasfondo 4</li>"
                . "<li>Trasfondo 5</li>"
                . "<li>Trasfondo 6</li>"
                . "</ul>");     
    }
}
