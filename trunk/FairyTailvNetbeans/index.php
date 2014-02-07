<!DOCTYPE html>
<!--
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
-->
<html>
    <head>
        <link href='http://fonts.googleapis.com/css?family=Artifika' rel='stylesheet' type='text/css'>
        <meta charset="UTF-8">
        <title>Creación de Personajes de Fairy Tail</title>
        <link rel=stylesheet type="text/css" href="CSS/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
    <body>
        <div>
            <h1>¡Configura tu Personaje!</h1>
            <form action="index.php" method="post">                
                <p>
                    <select name="tipo_pj">
                        <option value="Melero">Melero</option>
                        <option value="Distancia">Distancia</option>
                        <option value="Mental">Mental</option>
                    </select>
                    <input type="submit" value="¡Crear!" />
                </p>
            </form>
            
        </div>
        <div>
            <h1>Personaje Creado</h1>
        <?php
        if (isset($_POST['tipo_pj'])){
            $tipo_pj = ($_POST['tipo_pj']);
        } else {
            $tipo_pj='Melero';
        }
        include 'class_caracteristicas.php';
        include 'class_trasfondos.php';        
        // include 'class_levear.php';
        // include 'class_hechizos.php';        
        $caracteristicas = new class_caracteristicas($tipo_pj);
        $trasfondos = new class_trasfondos();
        // $levear = new levear();
        // $hechizos = new hechizos();        
        ?>
        </div>
    </body>
</html>