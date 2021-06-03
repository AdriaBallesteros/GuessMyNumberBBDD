<?php
    session_start();
?>
<html>
    <head>
        <link rel=StyleSheet href="CSS/general.css" type="text/css" media=screen>
        <meta charset="UTF-8">
        <title>Guess my Number</title>
    </head>
    <body>
        <h1 style="text-align:center">Guess my Number con Base de Datos</h1>
        <h3>La maquina adivina tu número</h3>
             
        <form name="form10_m" method="post" action="lvl10_machine.php">
            <strong>Nivel 1-10 : </strong> 
            <input type="submit" value="Entra" style="background-color:green; color:white">
        </form>
        
        <form name="form50_m" method="post" action="lvl50_machine.php">
            <strong>Nivel 1-50 : </strong>
            <input type="submit" value="Entra" style="background-color:green; color:white">
        </form>

        <form name="form100_m" method="post" action="lvl100_machine.php">
            <strong>Nivel 1-100 : </strong>
            <input type="submit" value="Entra" style="background-color:green; color:white">
        </form>

        <form name="volver" method="post" action="index.php">
            <input type="submit" value="Volver a inicio" style="background-color:red; color:white">
        </form>
        
    </body>
</html>