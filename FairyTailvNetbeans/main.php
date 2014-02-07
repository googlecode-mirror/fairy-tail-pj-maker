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
            <h1>¡Crea otro Personaje!</h1>
            <form action="main.php" method="post">                
                <p>
                    <select name="tipo_pj">
                        <option>Melero</option>
                        <option>Distancia</option>
                        <option>Mental</option>
                    </select>
                    <input type="submit" value="¡Crear!" />
                </p>
            </form>
            
        </div>
        <div>
            <h1>Personaje Creado:</h1>
        <?php
        $tipo_pj = ($_POST['tipo_pj']);
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