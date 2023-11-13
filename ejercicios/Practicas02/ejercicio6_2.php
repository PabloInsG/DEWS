<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        error_reporting(E_ALL ^ E_WARNING); 

        $clave = $_GET['numero'];
        $texto = $_GET['texto'];
        $encriptar = $_GET['Encriptar'];
        $desencriptar = $_GET['Desencriptar'];

        $letrasToNumber = [];

        if(strlen($texto) > 10){
            if(!isset($desencriptar)){
                if($clave > 0 && $clave < 100){
                    for($i = 0; $i < strlen($texto); $i++){
                        $letrasToNumber[$i] = ord($texto[$i]);
                    }
                    foreach($letrasToNumber as $indice){
                        $suma = $indice + $clave;
                        print chr($suma);
                        $numberToLetra[] = chr($suma);
                    }
                }
            } else{
                if($clave > 0 && $clave < 100){
                    for($i = 0; $i < strlen($texto); $i++){
                        $letrasToNumber[$i] = ord($texto[$i]);
                    }
                    foreach($letrasToNumber as $indice){
                        $resta = $indice - $clave;
                        print chr($resta);
                        $numberToLetra[] = chr($resta);
                    }
                }
            }
        } else{
                print "El texto debe ser mayor de 10 caracteres.";
        }
    ?>
</body>
</html>