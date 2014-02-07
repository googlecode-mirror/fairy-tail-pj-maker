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
            <h1>¡Crea un Personaje!</h1>
        </div>
        <div>            
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
    </body>
</html>