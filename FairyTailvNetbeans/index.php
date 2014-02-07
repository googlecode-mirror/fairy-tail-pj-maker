<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
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