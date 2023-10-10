<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" style="height: 325px">
            <h1>FORMULARIO TABLA</h1>
            <div class="inputs">
                <p>Introduce el numero de columnas:</p>
                <input type="number" step="any" name="columnas" id="">
                <p>Introduce el numero de filas:</p>
                <input type="number" step="any" name="filas" id="">
            </div>
            <div class="submit">
                <input type="submit" value="Enviar">
            </div>
        </form>
        <?php
        error_reporting(E_ALL ^ E_WARNING); 
                if($_SERVER['PHP_SELF'] = "POST"){
                    $columnas = $_POST["columnas"];
                    $filas = $_POST["filas"];
                }
                print "<table border=\"1\" style=\"width: 800px; background-color: rgb(193, 156, 214); margin-top: 20px; text-align: center;\">";
                for($i = 0; $i < $filas; $i++){
                    print "<tr>";
                    for($j = 0; $j < $filas; $j++){
                        print "<td>$j</td>";
                    }
                    print "</tr>";
                    
                }
                print "</table>";

            ?>

    </div>
</body>
</html>