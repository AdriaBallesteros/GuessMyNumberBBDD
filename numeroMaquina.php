<?php
    session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Guess my Number</title>
    </head>
    <body>
        <h1 style="text-aling:center">Guess my Number con Base de Datos</h1>
        <h3>Adivina el número de la máquina</h3>
    
        <form name="form10" method="post" action="lvl10.php">
            <strong>Nivel 1-10 : </strong> 
            <input type="submit" value="Entra" style="background-color:green; color:white">
        </form>
        
        <form name="form50" method="post" action="lvl50.php">
        <strong>Nivel 1-50 : </strong>
            <input type="submit" value="Entra" style="background-color:green; color:white">
        </form>

        <form name="form100" method="post" action="lvl100.php">
            <strong>Nivel 1-100 : </strong>
            <input type="submit" value="Entra" style="background-color:green; color:white">
        </form>
        
        <form name="volver" method="post" action="index.php">
            <input type="submit" value="Volver a inicio" style="background-color:red; color:white">
        </form>
    </body>
</html>