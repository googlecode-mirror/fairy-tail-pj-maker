<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Creación de Personajes de Fairy Tail</title>
        <link rel=stylesheet type="text/css" href="CSS/style.css">
    </head>
    <body>
        <div>
            <h1>Creador de Pjs de Fairy Tail</h1>
        <?php
        include 'class_caracteristicas.php';
        include 'class_trasfondos.php';
        // include 'class_levear.php';
        // include 'class_hechizos.php';
        $caracteristicas = new class_caracteristicas();
        $trasfondos = new class_trasfondos();
        // $levear = new levear();
        // $hechizos = new hechizos();
        ?>
        </div>
    </body>
</html>