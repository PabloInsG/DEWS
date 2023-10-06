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
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <h1>FORMULARIO ASTERISCOS</h1>
            <div class="inputs">
                <p>Introduce un numero</p>
                <input type="number" name="numero" id="">
            </div>
            <div class="submit">
                <input type="submit" value="Enviar">
            </div>
            <div style="margin-top: 20px; text-align: center">
                <?php
                    error_reporting(E_ALL ^ E_WARNING); 
                    if($_SERVER['PHP_SELF'] = "POST"){
                        $numero = intval($_POST["numero"]);
                    }
                    if($numero > 0)
                    for($i = 0; $i < $numero; $i++){
                        print "*";
                    } else{
                        echo "No puede ser un valor negativo";
                    }
                ?>
            </div>
        </form> 
    </div>
</body>
</html>